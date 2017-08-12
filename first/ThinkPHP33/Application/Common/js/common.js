    $(function(){   
    $("#kinmaxshow").kinMaxShow({
        height:420,
        intervalTime:3,
        switchTime:2000,
        button:{
            //按钮鼠标切换事件 可选事件 click、mouseover
            switchEvent:'click',
            //按钮上是否显示索引数字，从1开始，默认不显示
            showIndex:true,
            //按钮样式
            //正常 按钮样式  支持常规CSS样式，方法同jQuery css({key:val,……})
            normal:{width:'15px',height:'15px',lineHeight:'15px',border:"0px solid #FF0000",right:'5%',bottom:'10px',fontSize:'12px',color:"#0076d0",textAlign:'center',marginRight:'5px',fontFamily:"Verdana",float:'left'},
            //当前 按钮样式
            focus:{background:"green",border:"0px solid #FF0000",color:"#d96d22"}
        }
    });








})



    
    function DrawImage(ImgD,FitWidth,FitHeight){  
    var image=new Image();  
    image.src=ImgD.src;  
    if(image.width>0 && image.height>0){  
        if(image.width/image.height >= FitWidth/FitHeight){  
            if(image.width>FitWidth){  
                ImgD.width=FitWidth;  
                ImgD.height=(image.height*FitWidth)/image.width;  
            }  
            else{  
                ImgD.width=image.width;  
                ImgD.height=image.height;  
            }  
        }  
        else{  
            if(image.height>FitHeight){  
                ImgD.height=FitHeight;  
                ImgD.width=(image.width*FitHeight)/image.height;  
            }  
            else{  
                ImgD.width=image.width;  
                ImgD.height=image.height;  
            }  
        }  
    }  
} ;