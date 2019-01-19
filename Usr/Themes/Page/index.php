<style>
.Back-E1{
  padding-top: 20px;
  padding-bottom: 60px;
  background-color: #CFD8DC;
}
.Back-E2{
 border-radius: 18px;
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
              <span class="mdui-chip-icon">Ai:</span>
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

    <div class="mdui-container">
      <div class="mdui-row">
        <div class="mdui-col-xs-12">
          <div class="mdui-card Back-E2">
            <div class="mdui-tab mdui-tab-centered" mdui-tab>
              <a href="#Dynamic" class="mdui-ripple">动态</a>
              <a href="#example3-tab2" class="mdui-ripple">个人信息</a>
              <a href="#example3-tab3" class="mdui-ripple">应用</a>
            </div>
            
            <div id="Dynamic">
            <div class="mdui-card-primary">
              <div class="mdui-card-primary-title">动态</div>
              <div class="mdui-card-primary-subtitle">Dynamic</div>
            </div>
            <div class="mdui-divider"></div>
            <div class="mdui-card-content">
                
<ul class="mdui-list">
  <li class="mdui-list-item">
    <div class="mdui-list-item-avatar"><img src="https://avatars0.githubusercontent.com/u/34372490?s=460&v=4"/></div>
    <div class="mdui-list-item-content">
      <div class="mdui-list-item-title">Brunch this weekend?</div>
      <div class="mdui-list-item-text mdui-list-item-one-line"><span
          class="mdui-text-color-black">All Connors</span> - I'll be in your neighborhood ...
      </div>
    </div>
  </li>
  <li class="mdui-divider-inset mdui-m-y-0"></li>
  <li class="mdui-list-item">
    <div class="mdui-list-item-avatar"><img src="https://avatars0.githubusercontent.com/u/34372490?s=460&v=4"/></div>
    <div class="mdui-list-item-content">
      <div class="mdui-list-item-title">Summer BBQ</div>
      <div class="mdui-list-item-text mdui-list-item-one-line"><span class="mdui-text-color-black">to Alex, Scott, Jennifer</span>
        - Wish I could ...
      </div>
    </div>
  </li>
  <li class="mdui-divider-inset mdui-m-y-0"></li>
  <li class="mdui-list-item">
    <div class="mdui-list-item-avatar"><img src="https://avatars0.githubusercontent.com/u/34372490?s=460&v=4"/></div>
    <div class="mdui-list-item-content">
      <div class="mdui-list-item-title">Oui oui</div>
      <div class="mdui-list-item-text mdui-list-item-one-line"><span
          class="mdui-text-color-black">Sandra Adams</span> - Do you have Paris reco ...
      </div>
    </div>
  </li>
</ul>
                
            </div>
            </div>
            
          </div>
        </div>
      </div>
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
            cycle:4000,
            char:45
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
        settings.__proto__.restart = function(cycle=4000,char=45){
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
        //古学词库
        "慎终追远，民德归厚矣。",
        "学而时习之，不亦说乎？",
        "巧言令色，鲜矣仁！",
        "慎终追远，民德归厚矣。",
        "贫而无怨难，富而无骄易。",
        "其言之不怍，则为之也难。",
        "勿欺也，而犯之。",
        "古之学者为己，今之学者为人。",
        "北冥有鱼，其名为鲲。鲲之大，不知其几千里也。",
        "吾有大树，人谓之樗。",
        "窈窕淑女、君子好逑。",
        "蒹葭苍苍、白露为霜。",
        "蒹葭凄凄、白露未晞",
        "蒹葭采采、白露未已。",
        "学而时习之不亦说乎",
        "学如不及犹恐失之",
        "吾尝终日不食终夜不寝以思无益不如学也",
        "未闻花名，但识花香，再见花时，泪已千行",
        "人类的本质是复读机",
        "仕而优则学学而优则仕",
        "学不厌智也教不倦仁也",
        "君有忧色，何也？",
        "爱亲者，不敢恶于人",
        "敬亲者，不敢慢于人",
        "爱敬尽于事亲，而德教加于百姓，刑于四海",
        "夙兴夜寐，无忝尔所生"
      ]);
    </script>


</div>
