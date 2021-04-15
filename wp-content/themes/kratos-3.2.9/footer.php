<?php
/**
 * 主题页脚
 * @author Seaton Jiang <seaton@vtrois.com>
 * @license MIT License
 * @version 2021.04.15
 */
?>
<div class="k-footer">
    <div class="f-toolbox">
        <div class="gotop <?php if ( kratos_option('s_wechat', false) ){ echo 'gotop-haswechat'; } ?>">
            <div class="gotop-btn">
                <span class="kicon i-up"></span>
            </div>
        </div>
        <?php if ( kratos_option('s_wechat', false) ){ ?>
        <div class="wechat">
            <span class="kicon i-wechat"></span>
            <div class="wechat-pic">
                <img src="<?php echo kratos_option('s_wechat_url', ASSET_PATH . '/assets/img/wechat.png'); ?>">
            </div>
        </div>
        <?php } ?>
        <div class="search">
            <span class="kicon i-find"></span>
            <form class="search-form" role="search" method="get" action="<?php echo home_url('/'); ?>">
                <input type="text" name="s" id="search-footer" placeholder="<?php _e('搜点什么呢?', 'kratos'); ?>" style="display:none"/>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p class="social">
                <?php
                    $social = array('s_sina', 's_bilibili', 's_douban', 's_coding', 's_gitee', 's_twitter', 's_telegram', 's_linkedin', 's_youtube', 's_github', 's_stackflow', 's_email');
                    foreach ($social as $social) {
                        if (kratos_option($social)) {
                            echo '<a target="_blank" rel="nofollow" href="' . kratos_option($social . '_url') . '"><i class="kicon i-' . str_replace("s_", "", $social) . '"></i></a>';
                        }
                    }
                ?>
                </p>
                <?php
                    $sitename = get_bloginfo('name');
                    echo '<p>' . kratos_option('s_copyright', 'COPYRIGHT © 2021 ' . $sitename . '. ALL RIGHTS RESERVED.') . '</p>';
                    echo '<p>THEME <a href="https://github.com/vtrois/kratos" target="_blank" rel="nofollow">KRATOS</a> MADE BY <a href="https://www.vtrois.com/" target="_blank" rel="nofollow">VTROIS</a></p>';
                    if (kratos_option('s_icp')) {
                        echo '<p><a href="https://beian.miit.gov.cn/" target="_blank" rel="nofollow">' . kratos_option('s_icp') . '</a></p>';
                    }
                    if (kratos_option('s_gov')) {
                        echo '<p><a href="' . kratos_option('s_gov_link', '#') . '" target="_blank" rel="nofollow" ><i class="police-ico"></i>' . kratos_option('s_gov') . '</a></p>';
                    }
                    if (kratos_option('seo_statistical')) {echo '<p>' . kratos_option('seo_statistical') . '</p>';}
                ?>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
<!-- 建站时间 -->
<script>
    function secondToDate(second) {
        if (!second) {
            return 0;
        }
        var time = new Array(0, 0, 0, 0, 0);
        if (second >= 365 * 24 * 3600) {
            time[0] = parseInt(second / (365 * 24 * 3600));
            second %= 365 * 24 * 3600;
        }
        if (second >= 24 * 3600) {
            time[1] = parseInt(second / (24 * 3600));
            second %= 24 * 3600;
        }
        if (second >= 3600) {
            time[2] = parseInt(second / 3600);
            second %= 3600;
        }
        if (second >= 60) {
            time[3] = parseInt(second / 60);
            second %= 60;
        }
        if (second > 0) {
            time[4] = second;
        }
        return time;
    }
</script>
<script type="text/javascript" language="javascript">
    function setTime() {
        // 博客创建时间秒数，时间格式中，月比较特殊，是从0开始的，所以想要显示5月，得写4才行，如下
        var create_time = Math.round(new Date(Date.UTC(2011, 06, 11, 17, 58, 0))
                .getTime() / 1000);
        // 当前时间秒数,增加时区的差异
        var timestamp = Math.round((new Date().getTime() + 8 * 60 * 60 * 1000) / 1000);
        currentTime = secondToDate((timestamp - create_time));
        currentTimeHtml = currentTime[0] + '年' + currentTime[1] + '天'
                + currentTime[2] + '时' + currentTime[3] + '分' + currentTime[4]
                + '秒';
        document.getElementById("htmer_time").innerHTML = currentTimeHtml;
    }
    setInterval(setTime, 1000);
</script>
</body>
</html>
