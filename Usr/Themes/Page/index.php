<style>
.Back-E1{
  padding-top: 20px;
  padding-bottom: 60px;
  background-color: #CFD8DC;
}
.comment-section {
 width: 145px;
 top: 20%;
 transform: translateY(-25%);
}
.SetButton{
 transform: translateY(-47.2%);
 width: 95px;
}
</style>

<div class="mdui-container-fluid">
    <div class="mdui-row Back-E1">
    
          <div class="mdui-col-xs-12 mdui-valign">
            <div class="mdui-chip">
              <span class="mdui-chip-icon">AI:</span>
              <span class="mdui-chip-title"><span id="rand-character"></span></span>
            </div>
         </div>
    
      <div class="mdui-col-xs-12">
          <img class="mdui-img-circle mdui-center" src="https://q1.qlogo.cn/g?b=qq&nk=1091044631&s=140" />
      </div>
    </div>
    
    <div class="mdui-row">
      <div class="mdui-col-xs-6 comment-section">
        <div class="cui-card-link-avatar comment-section cui-animate-hover-up">
        	<img src="https://q1.qlogo.cn/g?b=qq&nk=1091044631&s=640" class="cui-card-link-avatar-image" />
        	<div class="cui-card-link-avatar-text">
        		<div class="cui-card-link-avatar-title">HanFen</div>
        		<div class="cui-card-link-avatar-subtitle">Root</div>
        	</div>
        </div>
      </div>
      <div class="mdui-col-xs-6 mdui-float-right SetButton">
        <button class="mdui-fab mdui-color-theme-accent mdui-ripple"><i class="mdui-icon material-icons">&#xe8b8;</i></button>
      </div>
    </div>

    <div class="mdui-row">

    </div>



    <div class="mdui-fab-wrapper" id="exampleFab">
      <button class="mdui-fab mdui-ripple mdui-color-deep-purple">
        <!-- 默认显示的图标 -->
        <i class="mdui-icon material-icons">&#xe6dd;</i>
        
        <!-- 在拨号菜单开始打开时，平滑切换到该图标，若不需要切换图标，则可以省略该元素 -->
        <i class="mdui-icon mdui-fab-opened material-icons">add</i>
      </button>
      <div class="mdui-fab-dial">
        <button class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-pink"><i class="mdui-icon material-icons">backup</i></button>
        <button class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-red"><i class="mdui-icon material-icons">bookmark</i></button>
        <button class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-orange"><i class="mdui-icon material-icons">access_alarms</i></button>
        <button class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-blue"><i class="mdui-icon material-icons">touch_app</i></button>
      </div>
    </div>


<script>
      function randomCharacter(element,characters=["UNDEFINED"]){
        var settings = {
          el:element,
          chars:characters,
          delay:{
            cycle:2000,
            char:25
          },
          intervals:{
            cycle:null,
            char:null
          },
          progress:{
            cycle:null,
            char:null
          }
        };
        function updateEntire(){
          //if(!settings.intervals.char){
            settings.progress.cycle = Math.random()*settings.chars.length|0;
            settings.progress.char = 0;
            //settings.intervals.char = setInterval(updateOneCharacter,settings.delay.char);
          //}
        }
        function updateOneCharacter(){
       // if(settings.progress.char++<settings.chars[settings.progress.cycle].length)
          document.querySelector(settings.el).innerText = 
            settings.chars[settings.progress.cycle].substr(0,settings.progress.char)+
            Math.random().toString(16).substr(2,settings.chars[settings.progress.cycle].length-settings.progress.char);
         // else
         //   settings.intervals.char = clearInterval(settings.intervals.char);
        }
        function cycleController(){
          //Finally I decided to use a controller to control the cycles looping.
          if(!settings.intervals.char) {
            updateEntire();
            settings.intervals.char = setInterval(function(){
              if(settings.progress.char++<settings.chars[settings.progress.cycle].length)
                updateOneCharacter();
              else
                settings.intervals.char = clearInterval(settings.intervals.char);
            },settings.delay.char);
          }
        }
        settings.__proto__.restart = function(cycle=2000,char=25){
          clearInterval(settings.intervals.cycle);
          clearInterval(settings.intervals.char);
          settings.intervals.char = null;//Prevent exceptions.
          settings.delay = {cycle:cycle,char:char};
          settings.intervals.cycle = setInterval(cycleController,cycle);
          cycleController();//I don't want to wait for a few seconds first.
        }
        Object.freeze(settings.__proto__);//Prevent unexpected changes.
        settings.restart();//Start the refresher.
        return settings;
      }
      var example = new randomCharacter("#rand-character",[
        //常用MC指令、常见B站梗、常见指令和代码
        "/give @a hugs 64",
        "/gamerule keepInventory true",
        "/gamemode creative",
        "Are you OK???",
        "幻风是大D萌妹!",
        "The deep dark fantasies.",
        "Do you like what you see?",
        "Boy next door.",
        "你是魔鬼吗？",
        "毕竟老夫也不是什么魔鬼嘛",
        "Undingable",
        "爆炸吧，现充!",
        "幻风是大D萌妹!",
        "你被强化了，快送",
        "影子都是爱你的形状",
        "信仰之跃",
        "万恶之源",
        "未闻花名，但识花香，再见花时，泪已千行",
        "人类的本质是复读机",
        "←NVIDIA Intel↓",
        "System.out.println('Hello World');",
        "rm -rf / --no-root-preserve",
        "del /q /f C:\\",
        "print('Hello World')",
        "while(1) console.log('人类的本质是复读机');",
        "<a href='javascript:alert(\\'清除成功\\');'>清除缓存</a>"
      ]);
    </script>


</div>
