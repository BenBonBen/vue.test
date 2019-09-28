<?php
//+----------------------------------------------------|
// | Description:
// +---------------------------------------------------|
// | Author: 浩丶IMOYH [oyhemail@163.com]
// | Last Modified: 2018-9-1
//+----------------------------------------------------|



/**
 * 语言输出
 *
 * @param String $text 文本
 * @param String $params 参数
 * @return String
 */
function Lang($text, $params='')
{

    ## 获取全局变量
    global $DG;
    $sign = $DG['site']['lang_sign'];

    ## 获取结果
    $result = null;

    ## 传入的文本为数字是判断语言包中是否存在，存在时使用语言包
    if(is_int($text) && isset($DG['lang'][$text]) && $result === null) {
        $result = $DG['lang'][$text];
    } elseif(is_int($text) && !$result) {
        return outInfo('请查看['.$text.']是否在语言包中被定义');
    }

    ## 如果传入带语言包的参数
    if(is_array($text) && isset($text[$sign]) && $result === null){
        $result = $text[$sign];
    } elseif(is_array($text) && $result === null) {
        return outInfo("请检查传入的文本是否正确",'warning');
    }

    ## 无法作为数组解析时表示文本并不是语言包
    $textArr = @json_decode($text,true);
    if(!is_array($textArr) && $result === null) {
        $result = $text;
        ## 能作为数组解析，并且设置了语言包
    } elseif(is_array($textArr) && isset($textArr[$sign]) && $result === null) {
        ## 查找并且使用不为空的语言包
        if($textArr[$sign] != '') {
            $result = $textArr[$sign];
        } else {
            foreach ($textArr as $item) {
                if($item != '') {
                    $result = $item;
                    continue;
                }
            }
            if($result === null) $result = '';
        }
        ## 能作为数组解析，但没同语言包条件时返回提示信息
    } elseif(is_array($textArr) && $result === null) {
        return outInfo("请检查传入的文本是否正确",'warning');
    }


    ## 没有传入参数时直接返回结果，默认将标签实体化
    if($params == '') return htmlspecialchars_decode($result);

    ## 解析参数
    $params = explode('|',$params);
    $data = [];
    foreach ($params as $value) {
        $value = explode(':',$value);
        if(count($value) > 1) {
            $data[$value[0]] = $value[1];
        } else {
            $data[] = $value[0];
        }
    }
    $params = $data;

    ## 默认将标签实体化
    $result = htmlspecialchars_decode($result);

    ## 删除html标签
    if(isset($params['remove_tags'])) {
        $result = strip_tags($result);
    }

    ## 截取字符串
    if(isset($params['sub_string'])) {
        $result = strip_tags($result);
        $result = mb_substr($result, 0, $params['sub_string'], 'utf-8');
    }

    ## 输出带字符输出标签
    if(isset($params['out_tags'])) {
        $result = htmlspecialchars($result);
    }

    ## 返回结果
    return $result;
}


/**
 * 图片输出
 *
 * @param String $path 图片储存路径
 * @param Array $params 图片处理参数
 * @return String
 */
function Img($path='', $params=[])
{
    if($path == '') return '';
    return "//upload.digoodcms.com/{$path}";
}


/**
 * 文件地址输出
 *
 * @param String $path 文件储存路径
 * @return String
 */
function outFile($path='')
{
    if($path == '') return '';
    return "//upload.digoodcms.com/{$path}";
}


/**
 * 配置加载
 *
 * @param String $configFile 配置文件路径
 * @return Array
 */
function getConfig($configFile, $feld=null)
{
    ## 拼接配置文件路径，并判断配置文件
    $filePath = __DIR__ . '/../../config/' .$configFile.'.php';
    if(!file_exists($filePath)) throw new Exception("Error: 配置文件不存在！config/{$configFile}.php");

    ## 初始化全局变量
    global $DG;
    foreach ($DG as $key => $value) {
        $$key = $value;
    }

    ## 获取配置文件返回内容，并判断配置文件返回类型
    $config = include $filePath;;
    if(!is_array($config)) throw new Exception("Error: 配置文件返回类型错误！ 请查看文件：config/{$configFile}");
    if(!$feld) return $config;

    ## 如果有传入指定字段并且字段存在时返回字段
    if(!isset($config[$feld])) throw new Exception("Error: 请查看文件：config/{$configFile} 中 {$feld} 字段是否被定义");
    return $config[$feld];
}


/**
 * 输出提示信息
 *
 * @param String $content
 * @param String $type error|warning|success|info
 * @return String
 */
function outInfo($content='', $type='error')
{
    ## 提示类型对应的颜色
    $color = [
        'error' => 'red',
        'warning' => 'orange',
        'success' => 'green',
        'info' => 'sapphire'
    ];
    # 如果类型值不存在时使用直接使用$type作为颜色
    if(isset($color[$type])) {
        $color = $color[$type];
    } else {
        $color = $type;
    }
    if($type == 'none') return "【提示：$content 】";
    return "<span style=\"color:$color;\">【提示：$content 】</span>";
}


/**
 * 递归获取子级数据
 *
 * @param Array OR Int $id 需要获取子级数据的模型ID
 * @param String $model 数据模型[数据表名]
 * @param Array $order_by 排序条件
 * @param Array $where 查询条件
 * @param Int $deep 查询深度
 * @return Array
 */
function getChilds($id, $model, $order_by=false, $where=false, $deep=0, $level=0)
{
    ## 判断深度
    if($deep && $deep == $level) return null;
    ## 引入系统变量
    global $DG;
    $db = $DG['db'];
    ## 传入的ID非数组时转换为数组
    if(!is_array($id)) {
        $idArr[] = $id;
    } else {
        $idArr = $id;
    }
    ## 预制子级数据容器
    $childsData = [];
    ## 通过父级ID获取子级数据
    if(!count($idArr)) return null;

    ## 数据查询
    $db->where_in('parent_id',$idArr);
    ## 排序条件
    if(is_array($order_by)) {
        foreach ($order_by as $key => $value) {
            $db->order_by($key, $value);
        }
    }
    ## 查询条件
    if(is_array($where)) {
        foreach ($where as $key => $value) {
            $db->where($key, $value);
        }
    }
    ## 获取数据元
    $qurey = $db->get($model);

    ## 数据存在时继续操作
    if($qurey->num_rows()) {
        ## 将子级数据拼接到数据容器中
        $childsData = array_merge($childsData,$qurey->result_array());
        ## 循环获取子级数据ID
        $idArr = [];
        foreach ($qurey->result_array() as $item) {
            $idArr[] = intval($item['id']);
        }
        ## 继续获取子级的子级
        $result = getChilds($idArr, $model, $order_by, $where, $deep, $level+1);
        ## 判断返回结果，并将结果拼接到数据容器中
        if($result) $childsData = array_merge($childsData, $result);
    }
    ## 返回数据
    return $childsData;
}


/**
 * 递归获取父级
 *
 * @param Int $id 模型ID
 * @param String $model 数据模型
 * @param Boolean $db
 * @return Array
 */
function getParents($id, $model, $db=false) {
    ## 引入系统变量
    if(!$db) {
        global  $DG;
        $db = $DG['db'];
    }
    ## 预制结果容器
    $result = [];
    ## 通过模型查找父级ID
    $data = $db->get_where($model, ['id'=> $id])->row_array();
    if($data) {
        array_unshift($result, $data);
    }
    ## 判断并继续查询
    if($data && $data['parent_id'] > 0) {
        $parentsData =  getParents($data['parent_id'], $model, $db);
        $result = array_merge($parentsData, $result);
    }
    ## 返回数据
    return $result;
}


/**
 * 构建导航数组
 *
 * @param Array $items 需要构建的数据，一组具有父级关系的数据
 * @param String $condition 父级条件，一般为：parent_id
 * @param String $sublevel 构建下一级数据，一般为 children
 * @return Array
 */
function buildNavData($items, $condition='parent_id', $sublevel='children')
{	
    $data = [];
    ## 遍历 递归出层级
    $items = array_column($items, NULL, 'id');
    foreach($items as $item){
        if(isset($items[$item[$condition]])){
            $items[$item[$condition]][$sublevel][] = &$items[$item['id']];
        }else{
            $data[] = &$items[$item['id']];
        }
    }
    ## 返回数据
    return $data;
}


/**
 * 统一数据字段
 *
 * @param Array $data 数据
 * @param String $uri_model URI model 地址栏第一个参数
 * @return Array
 */
function unifiedData($data, $uri_model)
{
    $data['link'] = "/{$uri_model}/{$data['url']}";
    $data['name'] = isset($data['name']) ? Lang($data['name']) : Lang($data['title']);
    return $data;
}


/**
 * 获取导航数据
 *
 * @param String $model 数据模型
 * @param Int $id 需要获取导航数据的模型ID
 * @param Array $params 顶级导航参数
 * @param String $nav 选择导航位置
 * @param Bool $build 是否加工成导航数据
 * @return Array
 */
function getNavData($model, $id=0, $params=[], $nav='main', $deep=3, $build=true) {
    ## 引入全局变量
    global $DG;
    $db = $DG['db'];
    ## 判断ID
    if($id == 0) {
        ## 初始化顶级导航数据
        $itemData['url'] = 'all';
        $itemData['name'] = '';
        $itemData['id'] = $id;
        $itemData['parent_id'] = -1;
        ## 子级导航数据
        $itemChildsData = $db->order_by('sort','DESC')->get($model)->result_array(); // 查询并获取数据
    } else {
        ## 顶级导航数据
        $itemData = $db->get_where($model, ['id' => $id])->row_array();
        ## 子级导航数据
        $itemChildsData = getChilds($itemData['id'], $model, ['sort' => 'DESC'], false, $deep); // 通过顶级菜单获取子级数据
    }
    ## 覆盖参数
    $itemData = array_merge($itemData, $params);
    ## 合并数组
    $itemsData = $itemChildsData;
    array_unshift($itemsData, $itemData);

    ## 遍历统一数据格式
    $resultData = [];
    foreach ($itemsData as $index => $item) {
        if (isset($item['nav']) && !in_array($nav, json_decode($item['nav'], true))) continue;  // 排除没有设置在在主菜单展示的页面
        $resultData[$index] = unifiedData($item, $model); // 统一数据格式
        if (isset($item['redirect_url']) && $item['redirect_url']) $resultData[$index]['link'] = $item['redirect_url']; // 将链接替换成需要重定向的url
    }
    if($build) $resultData = buildNavData($resultData)[0]; // 将数据加工成具有层级关系的导航数据
    return $resultData; // 返回数据
}


/**
 * seo 输出
 *
 * @param array $pageData
 * @param array $ogData
 * @param array $onSeoTag
 * @param array $onOgTag
 * @return string
 */
function seoInfo($pageData=[], $ogData=[], $onSeoTag=true, $onOgTag=true){

    ## 引入全局变量
    global $DG;
    $site = $DG['site'];
    $config = $DG['config'];

    ## 初始化
    $title = $site['title'];
    $keywords = $site['keywords'];
    $description = $site['description'];
    $ogItems = [
        'type' => 'website',
        'title' => $site['title'],
        'site_name' => $site['title'],
        'description' => $site['description'],
        'url' => "{$site['scheme']}://{$site['domain']}{$_SERVER['REQUEST_URI']}",
    ];
    if(isset($config['site_main_logo']) && $config['site_main_logo']) $ogItems['image'] = Img($config['site_main_logo']);

    ## 获取页面数据
    if(is_array($pageData)) {
        ## seo
        if(isset($pageData['title'])) $title = $pageData['title'];
        if(isset($pageData['name'])) $title = $pageData['name'];
        if(isset($pageData['seo_title'])) $title = $pageData['seo_title'];
        if(isset($pageData['seo_keywords'])) $keywords = $pageData['seo_keywords'];
        if(isset($pageData['seo_description'])) $description = $pageData['seo_description'];

        ## og
        if(isset($pageData['img']) && $pageData['img']) $ogItems['image'] = Img($pageData['img']);
        if(isset($pageData['image']) && $pageData['image']) $ogItems['image'] = Img($pageData['image']);
        if(isset($pageData['title'])) $ogItems['title'] = Lang($pageData['title']);
        if(isset($pageData['name'])) $ogItems['name'] = Lang($pageData['name']);
        if(isset($pageData['description'])) $ogItems['description'] = Lang($pageData['description'],'sub_string:150').'...';
        if(isset($pageData['content'])) $ogItems['description'] = Lang($pageData['content'],'sub_string:150').'...';
    }

    ## 获取og数据
    if(is_array($ogData)) {
        if(isset($ogData['url']))  $ogItems['url'] = $ogData['url'];
        if(isset($ogData['type'])) $ogItems['type'] = $ogData['type'];
        if(isset($ogData['image'])) $ogItems['image'] = $ogData['image'];
        if(isset($ogData['title'])) $ogItems['title'] = $ogData['title'];
        if(isset($ogData['site_name'])) $ogItems['site_name'] = $ogData['site_name'];
        if(isset($ogData['description'])) $ogItems['description'] = $ogData['description'];
    }

    ## 引入全局配置
    $globalConfig = getConfig('config');

    ## 处理输出
    $title = Lang($title);
    $keywords = Lang($keywords);
    $description = Lang($description);
    $html = "<!-- SEO BEGIN -->";
    
    if($onSeoTag) {
        $html .= "<title>{$title}</title> \r\n";
        $html .= "<meta name=\"keywords\" content=\"{$keywords}\"> \r\n";
        $html .= "<meta name=\"description\" content=\"{$description }\"> \r\n";
    }

    ## og 标签
    if($onOgTag) {
        foreach ($ogItems as $property => $content) {
            $content = Lang($content);
            if(!$content) continue;
            $html .= "<meta property=\"og:{$property}\" content=\"{$content}\"/> \r\n";
        }
    }

    ## AMP 地址
    if(isset($globalConfig['amp_url']) && $globalConfig['amp_url']) {
        $url = rtrim($globalConfig['amp_url'],'/');
        $url = "{$url}{$_SERVER['REQUEST_URI']}";
        $html .= "<link rel=\"amphtml\" href=\"{$url}\"> \r\n";
    }
	
	## 网站图标
	if(isset($config['site_favicon']) && $config['site_favicon']) {
		$image = Img($config['site_favicon']);
		$html .= "<link rel=\"shortcut icon\" href=\"{$image}\"> \r\n";
	}
	
    ## 作者
    $html .= "<meta name=\"author\" content=\"{$globalConfig['author']}\"> \r\n";
    $html .= "<!-- SEO END --> \r\n";
    return $html;
}


/**
 * 加载视图文件
 *
 * @param String $file 视图文件路径
 * @param Array $params 需要传入到视图文件内的参数
 * @throws Exception
 */
function loadView($file,$params=[])
{
    $file = "views/{$file}.php";
    $path = __DIR__ . '/../../' .$file;
    if(file_exists($path)) {
        ## 引入全局变量
        global $DG;
        foreach ($DG as $key => $value) {
            $$key = $value;
        }
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        include $path;
    } else {
        throw new Exception("{$file} 文件不存在");
    }
}


/**
 * 分页工具
 *
 * @param Array $config
 * @return Array
 */
function pagination($config = [])
{
    global $DG;
    $uri = $DG['uri'];
    $base_url = "/{$uri['model']}/{$uri['url']}/";
    $default_config = [
        'base_url' => $base_url,
        'nav_length' => 5, //
        'total' => 0,
        'list_show' => 12,
        'pattern' => 'uri', // 翻页模式 uri|param
        'param' => 'page',
        'suffix' => '.html',
        'wrap_html' => '<ul class="pagination">%s</ul>',
        'prev_html' => '<li><a href="%s">‹</a></li>',
        'next_html' => '<li><a href="%s">›</a></li>',
        'first_html' => '<li><a href="%s">«</a></li>',
        'last_html' => '<li><a href="%s">»</a></li>',
        'now_html' => '<li class="active"><a href="#!">%s</a></li>',
        'number_html' => '<li><a href="%s">%s</a></li>'
    ];


    ## 引入全局配置
    $globalConfig = getConfig('config');
    ## 合并配置
    if(isset($globalConfig['pagination']) && is_array($globalConfig['pagination'])) {
        $default_config = array_merge($default_config, $globalConfig['pagination']);
    }
    $config = array_merge($default_config, $config);

    $config['base_url'] = trim($config['base_url'],'/');
    $config['base_url'] = "/{$config['base_url']}/";
    $base_url = $config['base_url'];

    ## 获取页码
    $page = 1;
    if($config['pattern'] == 'param') { // 分页模式为参数时使用$_GET方法获取页码
        if(isset($_GET[$config['param']])) $page = $_GET[$config['param']];
    } else { // 否则使用uri获取
        $page = $uri['page'];
    }
    ## 页码非数字时将页码设置为 1
    if(!is_numeric($page) || !$page) $page = 1;


    ## 计算总页数
    $page_count = ceil($config['total'] / $config['list_show']);
    ## 计算数据截取位置
    $start = ($page-1) * $config['list_show'];

    ## 最后一页
    $last = $page_count;
    ## 上一页
    $prev = $page - 1;
    if($prev <= 0) $prev = null;
    ## 下一页
    $next = $page + 1;
    if($next > $last) $next = null;
    ## 当前页
    $now = $page;


    ## 计算需要显示的页码链接
    $before = $now - floor($config['nav_length'] / 2);
    $after = $now + floor($config['nav_length'] / 2);
    if($config['nav_length'] % 2 == 0) $before + 1;
    ## 计算相对数组的位置

    ## 超出处理
    if($after > $last) {
        $before = $last - $config['nav_length'];
        $after = $last;
    }

    ## 超出处理
    if($after-$before >= $config['nav_length']) {
        $before = $after - $config['nav_length'] + 1;
    }

    ## 超出处理
    if($before <= 0) {
        $before = 1;
        $after = $config['nav_length'];
    }

    ## 创建列数组
    if($last <= $config['nav_length']) {
        $numbers = range(1, $last);
    } else {
        $numbers = range($before, $after);
    }

    ## 储存加工好的分页数据
    $resultData = [
        'list_show' => $config['list_show'],
        'start' => $start,
        'nav' => [
            'first' => 1,
            'prev' => $prev,
            'now' => $now,
            'numbers' => $numbers,
            'next' => $next,
            'last' => $last,
            'page_count' => $page_count,
        ]
    ];


    ## 将数据加工成 HTML
    $navData = $resultData['nav'];

    ## 如果总页数小于或等于1返回空
    if($navData['page_count'] <= 1) {
        return [
            'data' => $resultData,
            'html' => ''
        ];
    }


    ## 获取组合字符串
    $suffix = $config['suffix'];
    $param = $config['param'];

    ## 判断翻页请求模式，设置请求URL
    if($config['pattern'] == 'param') { // 参数模式
        $first_url = "{$base_url}?{$param}={$navData['first']}";
        $last_url = "{$base_url}?{$param}={$navData['last']}";
        $prev_url = "{$base_url}?{$param}={$navData['prev']}";
        $next_url = "{$base_url}?{$param}={$navData['next']}";
        ## 翻页列表组
        foreach ($navData['numbers'] as $number) {
            $list_urls[$number] = "{$base_url}?{$param}={$number}";
        }
    } else { // uri 模式
        $first_url = "{$base_url}{$navData['first']}{$suffix}";
        $last_url = "{$base_url}{$navData['last']}{$suffix}";
        $prev_url = "{$base_url}{$navData['prev']}{$suffix}";
        $next_url = "{$base_url}{$navData['next']}{$suffix}";
        ## 翻页列表组
        foreach ($navData['numbers'] as $number) {
            $list_urls[$number] = "{$base_url}{$number}{$suffix}";
        }
    }


    $numberHtml = '';
    ## 创建分页链接
    foreach($list_urls as $number => $url) {
        $number = (string)$number;
        if($navData['now'] == $number) {
            if($config['now_html']) $numberHtml .= sprintf($config['now_html'], $number)."\r\n";
        } else {
            if($config['number_html']) $numberHtml .= sprintf($config['number_html'], $url, $number)."\r\n";
        }
    }


    ## 前后翻页链接
    $firstHtml = '';
    $prevHtml = '';
    $nextHtml = '';
    $lastHtml = '';

    ## 当页码超出分页显示长度时 配置 前后翻页链接
    if($navData['last'] > $config['nav_length']) {
        if($config['first_html']) $firstHtml = sprintf($config['first_html'], $first_url);
        if($config['prev_html']) $prevHtml = sprintf($config['prev_html'], $prev_url);
        if($config['next_html']) $nextHtml = sprintf($config['next_html'], $next_url);
        if($config['last_html']) $lastHtml = sprintf($config['last_html'], $last_url);
    }


    ## 当前是第一页时 不显示往前翻页的标签
    if($navData['now'] == 1) {
        $firstHtml = '';
        $prevHtml = '';
    }

    ## 当前是最后一页时 不显示往后翻页的标签
    if($navData['now'] == $navData['last']) {
        $nextHtml = '';
        $lastHtml = '';
    }


    ## 组合HTML
    $resultHtml = "
        {$firstHtml}
        {$prevHtml}
        {$numberHtml}
        {$nextHtml}
        {$lastHtml}
    ";
    $resultHtml = sprintf($config['wrap_html'], $resultHtml);

    ## 返回结果
    return [
        'data' => $resultData,
        'html' => $resultHtml
    ];
}


/**
 * 加载主题包内的资源文件
 *
 * @param String $path 相对 static 文件夹的路径
 * @return String 资源地址
 */
function assets($path='') {
    ## 引入全局配置
    global $DG;
    $site = $DG['site'];
    $globalConfig = getConfig('config');
    ## 根据条件获取域名
    $domain = $site['domain'];
    if($globalConfig['site_debug']) $domain = "{$site['domain_test']}.digoodcms.com";
    ## 返回资源地址
    return "//{$domain}/static/{$path}?v=".time();
}