# whisper-letter

有话想让别人对你说吗( *￣▽￣)不妨试试这个

可以用做同学录或者啥的。

第一次写PHP和HTML= =渣技术见谅，~~安全性什么的完全顾及不上啊！所以~~**千万不要把隐私放在上面！！！！**

~~基本/粗略/大概/还行的~~**实现了自适应设计，手机电脑访问通吃。**

**实现效果可以看./sample/里面的截图**

---
安装方法：
* Clone这个项目，并配置nginx或者apache
* 导入./sql/memory.sql到mysql中,默认数据库为memory, ~~如果你懒得改就直接这样建就好了。~~**建库请选UTF-8**。
* 修改./upload.php ./admin/veryfy.php ./admin/admin.php 中mysql的数据库账号、密码和数据库名称。

###默认密码在sql的admin表单下，账号admin 密码whisperletter，请自行修改！！！**一定要修改！！！**
---
可以替换./image/background.jpg的方法替换背景图片，格式自己看咯。

想修改网页上默认的文字的，请直接修改./index.html，对话框的文字在./upload.php

欢迎使用啦~
