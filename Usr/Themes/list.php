<style>
    .mdui-list {
    padding: 0px 0!important;
    margin: 0;
    list-style: none;
    background-color: transparent;
    }
    .FnB_IMG {
    border-radius: 0px
    }
</style>
    <div class="mdui-drawer mdui-color-grey-50" id="main-drawer">
      <div class="mdui-list" mdui-collapse="{accordion: true}" style="margin-bottom: 76px;">
            
      <div class="mdui-card FnB_IMG">
        <div class="mdui-card-media">
          <img src="https://api.i-meto.com/bing?category=space"/>
          <div class="mdui-card-media-covered">
            <div class="mdui-card-primary">
              <div class="mdui-card-primary-subtitle"><div id="tp-weather-widget"></div></div>
            </div>
          </div>
        </div>
      </div>
        
            <a href="index.php">
              <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-light-blue">&#xe88a;</i>
                <div class="mdui-list-item-content">首  页</div>
              </li>
            </a>
            <div class="mdui-collapse-item mdui-collapse-item-dense">
              <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-deep-purple">account_box</i>
                <div class="mdui-list-item-content">用  户</div>
                <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
              </div>
              
              <div class="mdui-collapse-item-body mdui-list">
                <a href="login.php">
                    <li class="mdui-list-item mdui-ripple">
                        <i class="mdui-list-item-icon mdui-icon material-icons">https</i>
                        <div class="mdui-list-item-content">登陆</div>
                  </li>
                </a>
                
                <a href="ClassSchedule.php">
                    <li class="mdui-list-item mdui-ripple">
                        <i class="mdui-list-item-icon mdui-icon material-icons">group_add</i>
                        <div class="mdui-list-item-content">注册</div>
                    </li>
                </a>
              </div>
            </div>
            <div class="mdui-collapse-item mdui-collapse-item-open">
              <div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-deep-orange">apps</i>
                <div class="mdui-list-item-content">应  用</div>
                <i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
              </div>
              <div class="mdui-collapse-item-body mdui-list">
                <a href="ClassSchedule.php">
                    <li class="mdui-list-item mdui-ripple">
                      <i class="mdui-chip-icon cui-color-gradient-purple mdui-list-item-icon"><i class="mdui-list-item-icon mdui-icon material-icons">alarm_on</i></i>
                      <div class="mdui-list-item-content">ToDo</div>
                    </li>
                </a>
                <a href="ClassSchedule.php">
                    <li class="mdui-list-item mdui-ripple">
                      <i class="mdui-chip-icon cui-color-gradient-yellow mdui-list-item-icon"><i class="mdui-list-item-icon mdui-icon material-icons">edit_location</i></i>
                      <div class="mdui-list-item-content">Notes</div>
                    </li>
                </a>
              </div>
            </div> 
            
          <div class="mdui-divider"></div>
          
            <a>
            <li class="mdui-list-item mdui-ripple">
                <i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-indigo">&#xe0b7;</i>
                <span class="mdui-list-item-content mdui-text-color-theme-text">留言点滴</span>
                <span class="mdui-list-item-avatar cui-color-gradient-red">
                    <?php 
                    echo("99+");
                    //echo mysqli_num_rows( $ALLNUM );
                    ?>
                </span>
            </li>
            </a>
            
            
            <a>
    		  <li class="mdui-list-item mdui-ripple" mdui-dialog="{target:'#about_FnMB'}">
				<i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-brown">info_outline</i>
				<div class="mdui-list-item-content">ABOUT FnTie</div>
			  </li>
			</a>
    
        </div>
      </div>
      
          <div class="mdui-dialog" id="about_FnMB">
            <div class="mdui-dialog-title">ABOUT FnTie</div>
            <div class="mdui-dialog-content">
            <blockquote>
				<div class="mdui-chip">
                  <span class="mdui-chip-icon">Fn</span>
                  <span class="mdui-chip-title">FnB Air One</span>
                </div>
                <div class="mdui-chip">
                  <span class="mdui-chip-icon">V</span>
                  <span class="mdui-chip-title">O-117</span>
                </div>
				<br/>
				</p> 
				<div class="mdui-typo">       
				<p>开发者: <a href="https://github.com/Han-Fen" target="_blank">HanFen</a> </p>
				<p>鸣谢:<a href="https://github.com/DFFZMXJ" target="_blank">学神之女</a> <a href="https://github.com/zdhxiong" target="_blank">Zdhxiong</a></p>
				</div>
				<footer>© Copyright 2019 by FnTieStudio All rights are reserved.</footer>
			</blockquote>
            </div>
            <div class="mdui-dialog-actions">
              <button class="mdui-btn mdui-ripple" mdui-dialog-close>知 道 啦 !</button>
            </div>
          </div>
          
<script>(function(T,h,i,n,k,P,a,g,e){g=function(){P=h.createElement(i);a=h.getElementsByTagName(i)[0];P.src=k;P.charset="utf-8";P.async=1;a.parentNode.insertBefore(P,a)};T["ThinkPageWeatherWidgetObject"]=n;T[n]||(T[n]=function(){(T[n].q=T[n].q||[]).push(arguments)});T[n].l=+new Date();if(T.attachEvent){T.attachEvent("onload",g)}else{T.addEventListener("load",g,false)}}(window,document,"script","tpwidget","//widget.seniverse.com/widget/chameleon.js"))</script>
<script>tpwidget("init", {
    "flavor": "slim",
    "location": "WS10730EM8EV",
    "geolocation": "enabled",
    "language": "auto",
    "unit": "c",
    "theme": "white",
    "container": "tp-weather-widget",
    "bubble": "disabled",
    "alarmType": "badge",
    "color": "#FFFFFF",
    "uid": "U7CB28E99F",
    "hash": "d8fa9e77162f89206d887eaddaa3a3ca"
});
tpwidget("show");</script>
