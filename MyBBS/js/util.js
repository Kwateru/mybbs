// 掲示板の登録
function sendData() {
    // 入力欄を取得
    let nameValue = document.getElementById('name').value;
    let commentValue = document.getElementById('comment').value;

    // 入力欄のバリデーション
    if (nameValue === '') {
        alert('名前は必ず入力して下さい。');
        return;
    }

    // 非同期通信によるDB登録
    const ajax = new XMLHttpRequest();
    ajax.open('POST', 'function/bbs_save.php', true);
    ajax.onload = function () {
        if (ajax.status >= 200 && ajax.status < 300) {
            document.body.innerHTML = ajax.responseText;
            // 入力欄をリセット
            nameValue = '';
            commentValue = '';
        } else {
            alert('非同期通信によるDB登録に失敗しました。\nエラーコード：' + ajax.status);
        }
    };
    ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    ajax.send('name=' + encodeURIComponent(nameValue) + '&comment=' + encodeURIComponent(commentValue));
}

// 投稿の評価の登録
function count_btn(post) {
    // 投稿IDとアイコンを取得
    let postID = post.id;
    let btnIcon = post.getAttribute('uk-icon');

    // 非同期通信によるDB登録
    const ajax = new XMLHttpRequest();
    ajax.open('POST', 'function/bbs_good_bad_save.php', true);
    ajax.onload = function () {
        if (ajax.status >= 200 && ajax.status < 300) {
            document.body.innerHTML = ajax.responseText;
        } else {
            alert('非同期通信によるDB登録に失敗しました。\nエラーコード：' + ajax.status);
        }
    };
    ajax.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    ajax.send('id=' + encodeURIComponent(postID) + '&icon=' + encodeURIComponent(btnIcon));
}