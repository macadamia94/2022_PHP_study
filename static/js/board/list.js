(function() {   // 익명함수를 쓴 이유는 js는 덮어쓰기가 되기때문에 다른데서 trList를 사용할 경우 충돌방지
    const trList = document.querySelectorAll('tbody > tr');

    /*
    // 예 dataset 사용방법 알기
    const tr1 = trList[1];
    console.log(tr1.dataset.i_board);
    */

    trList.forEach(item => {
       item.addEventListener('click', function() {
            location.href=`detail?i_board=${item.dataset.i_board}`
       }) 
    });

})();