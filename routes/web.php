<?php


use Illuminate\Support\Facades\Route;
use App\Models\Idea;





// index  
Route::get('/ideas ', function () {

    $ideas = Idea::all();


    return view('ideas/index', [
        'ideas' => $ideas,
    ]);
});

// show
Route::get('/ideas/{idea} ', function (Idea $idea) {

    return view('ideas.show', [
        'idea' => $idea,
    ]);
});

// edit
Route::get('/ideas/{idea}/edit ', function (Idea $idea) {

    return view('ideas.edit', [
        'idea' => $idea,
    ]);
});


// update
Route::patch('/ideas/{idea} ', function (Idea $idea) {

    $idea->update([
        'description' => request('description')
    ]);

    return redirect("/ideas/ {$idea->id}");
});

// create
Route::post('/ideas', function () {

    Idea::create([
        'description' =>  request('description'),
        'state' => 'pending',
    ]);
    return redirect('/ideas');
});

// destroy
Route::delete('/ideas/{idea}', function (Idea $idea) {

    $idea->delete();

    return redirect('/ideas');
});




Route::get('/delete-ideas', function () {
    session()->forget('ideas');
    return redirect('/');
});

// temportary
Route::get('/delete-ideas', function () {
    idea::truncate();
    return redirect('/ideas');
});
