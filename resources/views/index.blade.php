@extends('layouts.app')

@section('title', 'ホームページ')

@section('content')
<div class="baseball">
    
    <div class="card title">
        <div class="card-header title">
            野球ノート
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
            <p class="intro">努力の証を刻む</p>
            <footer class="blockquote-footer explanation">
            スポーツをやる中で日誌は大事な役割を担います。<br>
            そんなノートをいつでもどこでも書いてみませんか？</footer>
            </blockquote>
        </div>
    </div>

</div>
<div class="container">
    <div class="account row">
        <div class="card teacher col-12 col-sm-6" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title teacher-title">教師用</h5>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <p class="card-text">
                教師用アカウントで生徒の<br>
                日誌にコメントをつけられる</p>
                <a href="{{ route('teacher.login') }}" class="card-link">ログイン</a>
                <a href="{{ route('teacher.register') }}" class="card-link">サインアップ</a>
            </div>
        </div>
        <div class="card student col-12 col-sm-6" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title student-title">生徒用</h5>
                <h6 class="card-subtitle mb-2 text-muted"></h6>
                <p class="card-text">
                生徒アカウントは教師に<br>
                日誌を提出できる
                </p>
                <a href="{{ route('student.login') }}" class="card-link">ログイン</a>
            </div>
        </div>
    </div>
</div>
<div class="accordion" id="accordionExample">
    <div class="card iphone">
        <div class="card-header iphone" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link font" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    iPhoneの便利機能、初期設定
                </button>
            </h2>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body iphone">
                1,ブラウザ(safari)でWEBページを開いた状態で、下部の「共有アイコン」をタップ。<br>
                <p class="yajirusi">↓</p>
                2,共有メニューに表示される「ホーム画面に追加」をタップ。<br>
                <p class="yajirusi">↓</p>
                3,名称などをご確認いただき、画面右上の「追加」をタップ。<br>
                <p class="yajirusi">↓</p>
                4,ホーム画面にアイコンが追加されたら完了です。<br>
            </div>
        </div>
    </div>
    <div class="card Android">
        <div class="card-header Android" id="headingTwo">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed font" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Androidの便利機能、初期設定
                </button>
            </h2>
        </div>
        <div id="collapseTwo" class="accordion" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="accordion-body Android">
                1,標準ブラウザでWEBページを開き、ブックマークしてください。<br>
                <p class="yajirusi">↓</p>
                2,ブックマークアイコンをタップします。<br>
                <p class="yajirusi">↓</p>
                3,ブックマークしたページを長押しします。<br>
                <p class="yajirusi">↓</p>
                4,「ショートカットを作成」をタップします。<br>
                <p class="yajirusi">↓</p>
                5,ホーム画面にアイコンが追加され完了です。
            </div>
        </div>
    </div>
    <div class="card computer">
        <div class="card-header computer" id="headingThree">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed font" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    パソコンの初期設定
                </button>
            </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body computer">
                1,トップページの右上部に☆マークをおす
            </div>
        </div>
    </div>
</div>
<div class="card care">
    <div class="card-header care">
        注意事項
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <p>・生徒用アカウントは教師用アカウントで作成できるようになっておりますので教師用アカウントを利用する方は生徒用アカウントを作成する際にメールアドレス、パスワードをメモしておいてください。</p>
            <p>・生徒用アカウントを作成する際は必ず生徒用アカウントをログアウトしてから新しいアカウントを作成してください。</p>
            <p>・教師用アカウントで生徒用アカウントにコメントする際に反応しないことがありますが、左上の再読み込みボタンを押すと正常に機能いたしますのでご了承ください。</p>
            <p>・教師用アカウントはアップデートやメンテナンスの通知をすることがありますので日常的に使用するメールアドレスを設定してください。</p>
        </blockquote>
    </div>
</div>

    
</div>
<footer class='last'>
        <p> GeekSalon Webコース福岡20期 坂上豪制作</p>
    </footer>
    @endsection
