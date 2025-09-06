<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

//一覧ページ
Volt::route('/', 'memos.index')->name('memos.index');
//具体的なパスを先に定義
Volt::route('/memos/create', 'memos.create')->name('memos.create');
//動的なパラメータを含むルートは最後に定義
//詳細ページ
Volt::route('/memos/{memo}', 'memos.show')->name('memos.show');
//編集ページ
Volt::route('/memos/{memo}/edit', 'memos.edit')->name('memos.edit');
