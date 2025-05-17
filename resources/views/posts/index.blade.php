<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset = "UTF-8">
    <title>Laravel課題「クエリビルダを使ってデータを取得しよう」</title>
</head>

<body>
    <table>
      <tr>
        <!-- ID非表示 -->
        <!-- <th>ID</th> -->
        <th>タイトル</th>
        <th>本文</th>
        <!-- 作成日時と更新日時は非表示 -->
        <!-- <th>作成日時</th> -->
        <!-- <th>更新日時</th> -->
      </tr>
      @foreach($posts as $post)
        <tr>
            <!-- ID非表示 -->
            <!-- <td>{{ $post->id }}</td> -->
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <!-- 作成日時と更新日時は非表示 -->
            <!-- <td>{{ $post->created_at }}</td> -->
            <!-- <td>{{ $post->updated_at }}</td> -->
        </tr>
      @endforeach
    </table>
 </body>

  </html>