<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">  <title>モダンHTMLデモ</title>

  {{-- Vite経由でCSSを読み込む --}}
  @vite(['resources/css/style.css'])

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
</head>
<body>
        @include('commons.header')

        <main>
            <div class="container">
                <p>このサイトはあなたのビジョンをお手伝いするサイトです</p>
            </div>
            <div class="scroll-container">
                <div class="scroll-content">
                    @foreach(range(1,10) as $i)
                        <img src="/images/図1.jpg" alt="door{{$i}}">
                    @endforeach
                </div>
            </div>
        </main>

        @include('commons.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>
