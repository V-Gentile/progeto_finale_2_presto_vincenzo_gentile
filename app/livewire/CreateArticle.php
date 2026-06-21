<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateArticle extends Component
{
    public $title;
    public $description;
    public $price;
    public $category_id;

    public function store()
    {
        $this->validate([
            'title' => 'required|min:2|max:100',
            'description' => 'required|min:3|max:3000',
            'price' => 'required|numeric|min:0',
            'category_id' => 'required',
        ]);

        Article::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category_id,
            'user_id' => Auth::id(),
        ]);

        session()->flash('message', 'Annuncio inserito con successo!');
        
        return redirect()->route('articles.index');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.create-article', compact('categories'));
    }
}
