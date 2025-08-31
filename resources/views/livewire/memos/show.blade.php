<?php

use App\Models\Memo;
use function Livewire\Volt\{state};

//ルートモデルバインディング　($memoはMemoクラス)
state(['memo' => fn(Memo $memo) => $memo]);

?>

<div>
    <h1>{{ $memo->title }}</h1>
    <p>{!! nl2br(e($memo->body)) !!}</p>
</div>
