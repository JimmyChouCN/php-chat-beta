<!DOCTYPE html>
<html>
<head>
    <title>DEMO</title>
</head>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<style type="text/css">
    * {
        margin: 0;
        padding: 0;
    }
    ul, li {
        list-style: none;
    }
    .friend-list{
        height: 600px;
        width: 260px;
        border: 1px solid #000;
    }
    .friend-list li{
        padding: 10px;
        height: 52px;
        cursor: pointer;
    }
    .friend-list li:hover{
        background-color: #d4d4d4;
    }
    .list-face-image{
        width: 50px;
        height: 50px;
    }
    .list-left,.list-right{
        float: left;
    }
    .list-right{
        margin-left: 10px;
    }
    .main-left, .main-right{
        float: left;
    }
    .main-right{
        border: 1px solid #000;
        width: 700px;
    }
    .chat-header{
        height: 60px;
        border-bottom: 1px solid #000;
    }
    .chat-content{
        height: 400px;
        border-bottom: 1px solid #000; 
    }
    .chat-message{
        height: 138px;
    }
    .list-msg-face{
        width: 30px;
        height: 30px;
    }
</style>
<script type="text/javascript">
    
</script>
<body>
<div class="main-container">
    <div class="main-wrapper">
        <div class="main-left">
            <div class="friend-list">
                <ul>
                    <li>
                        <div class="list-left"><img class="list-face-image" src="#"/></div>
                        <div class="list-right">
                            <div class="top-msg">test</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-right">
            <div class="chat-header">
                
            </div>
            <div class="chat-content">
                <div class="content-left-msg">
                    <div class="msg-image"><img class="list-msg-face" src="#" /></div>
                    <div class="msg-text">test</div>
                </div>
                <div class="content-right-msg"></div>
            </div>
            <div class="chat-message">
                <div class="tool-bar">
                    
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>