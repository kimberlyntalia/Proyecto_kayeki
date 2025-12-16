<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\PedidoDetalle;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    public function index()
    {
        $registros = Pedido::where('user_id', auth()->id())
            ->orderBy('id', 'desc')
            ->get();

        return view('pedido.index', compact('registros'));
    }

    public function realizar(Request $request)
    {
        $carrito = session()->get('carrito');

        if (!$carrito || count($carrito) == 0) {
            return redirect()->back()->with('error', 'El carrito está vacío');
        }

        DB::beginTransaction();

        try {
            $total = 0;

            foreach ($carrito as $item) {
                $total += $item['precio'] * $item['cantidad'];
            }

            $pedido = Pedido::create([
                'user_id' => auth()->id(),
                'total'   => $total,
                'estado'  => 'pendiente'
            ]);

            foreach ($carrito as $productoId => $item) {
                PedidoDetalle::create([
                    'pedido_id'   => $pedido->id,
                    'producto_id' => $productoId,
                    'cantidad'    => $item['cantidad'],
                    'precio'      => $item['precio'],
                ]);
            }

            session()->forget('carrito');
            DB::commit();

            return redirect()->route('perfil.pedidos')
                ->with('mensaje', 'Pedido realizado correctamente');

        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
