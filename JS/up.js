var upButton = document.getElementById('Button-Up'),s,distanse;
            function buttonHide(){
                debugger;
                if(document.body.scrollTop >= 80){
                    upButton.style.display = 'block';
                }else{
                    upButton.style.display = 'none';
                }
            }
            window.onload = buttonHide;
            window.onscroll  = buttonHide;
            upButton.onclick = function(){
                distanse = document.body.scrollTop;
                goUp();
            }
            function goUp(){
                document.body.scrollTop -= distanse /100;
                s = setTimeout(goUp, 10);
                if(document.body.scrollTop == 0){
                    clearTimeout(s);
                }
            }