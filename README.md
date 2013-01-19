crw(convenience rent web)
===

便租网


CRW框架目录架构
config -> 放置配置文件
controllers -> 放置控制器
models -> 放置模型
views -> 放置视图(页面模板之类的)
	xxx -> 模板文件夹，xxx是当前网站使用模板的名称，如当前使用一个phpmps的模板，这个文件夹叫phpmps，如果更改另外一个模板，则需要在数据库中更改配置(js,css也是放这文件夹底下)
	templates -> 放置smarty模板文件
	templates_c -> 放置smarty编译后的文件
	plugins -> 放置smarty的插件
libraries -> 放一些库文件

对phpmps原生的文件夹说明
admin -> 后台管理程序的文件夹
api -> 未确定，估计是与UCenter整合的接口
data -> 数据文件夹，其中phpmps自己的模板生成后的文件放这里面
images -> 图片文件夹
include -> 包含的库
install -> 安装的文件夹(如果我们改成程序，添加自己的数据库表后，这个基本没什么用了)
js -> 放js文件
templates -> 放模板文件
uc_client -> 名字看来是uc的客户端包
ucenter -> 这个是ucenter的程序，为了共享方面，我把ucenter安装到这里了
wap -> 不清楚是什么文件夹，看起来似乎是手机相关的

对于原本的目录结构，就不必更改了，代码也尽量不修改，添加的代码都按CRW框架目录架构进行编写