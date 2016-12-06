function fixDown(boxId){
    var box = document.getElementById(boxId);
    var cn = box.className;
    var bh=box.offsetTop;
    var wh=document.documentElement.clientHeight;//这里为了兼容IE，所以不能用window.innerHeight;
    if(bh >= wh){
    box.className = cn + " fixed-bottom";
    }else{
        box.className = cn;
        }
    }
    window.onload=function(){fixDown("bb");}
    window.onresize=function(){fixDown("bb");}

    function setTab(name,cursel,n){
        for(i=1;i<=n;i++){
        var menu=document.getElementById(name+i);
        var con=document.getElementById("con_"+name+"_"+i);
        menu.className=i==cursel?"hover":"";
        con.style.display=i==cursel?"block":"none";
        }
    }