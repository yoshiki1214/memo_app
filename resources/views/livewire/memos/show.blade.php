<?php

use App\Models\Memo;
use function Livewire\Volt\{state};

//ルートモデルバインディング　($memoはMemoクラス)
state(['memo' => fn(Memo $memo) => $memo]);

?>

<div>
    <a href="{{ route('memos.index') }}">戻る</a>
    <h1>{{ $memo->title }}</h1>
    <p>{!! nl2br(e($memo->body)) !!}</p>
</div>
