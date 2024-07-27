<?php

namespace App\Http\Controllers;

use App\Dtos\StoreCardDto;
use App\Http\Requests\StoreCardRequest;
use App\Models\Card;
use Illuminate\Http\Request;

class CardController extends Controller
{

    public function store(StoreCardRequest $request)
    {
        $data = $request->validated();
        $dto = new StoreCardDto($data);
        $card = Card::create(["title" => $dto->title, "description" => $dto->description]);
        return response()->json($card);
    }

    public function update()
    {
        return response()->json(["teste" => "teste"]);
    }

    public function delete(Request $request, int $id)
    {
        $card = Card::findOrFail($id);
        $card->delete();
        // return response()->json("Card com o Id: $id deletado com sucesso");
        return redirect()->route("card.index");
    }

    public function show(Request $request, int $id)
    {
        $card = Card::findOrFail($id);
        return view('show-cards', ["card" => $card]);
    }
    public function index()
    {
        $cards = Card::all();
        return view('index-cards', ["cards" => $cards]);
        // return response()->json($cards);
    }
}
