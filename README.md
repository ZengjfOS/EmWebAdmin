# 框架目录说明 

```
.
├── bin
│   └── auto                        # 会被Makefile调用的可执行文件，会自动处理文件合成、拷贝等县官相关事务 
├── custom
│   ├── common                      # 一些不能被合成的php文件，自定义的css、js文件
│   │   ├── config                  # json配置文件目录
│   │   ├── config.php              # PHP接写json配置文件，并保存在Smarty变量中
│   │   ├── css                     # 自定义的css样式
│   │   ├── customcss.php           # 引入自定义的css样式的php
│   │   ├── js                      # 自定义的js样式
│   │   ├── customjs.php            # 引入自定义的js样式的php
│   │   ├── loginDealWith.php       # 处理登如验证
│   │   ├── login.php               # 登录界面
│   │   ├── session.php             # session验证
│   │   └── webconsole.php          # terminal for web browser access
│   └── contents                    # 可以被合成的php文件，只需要专注于写内容就OK，完全支持bootstrap。
│       ├── about.php
│       ├── customerData.php
│       ├── customerSettings.php
│       ├── dataAndCalander.php
│       ├── hardware.php
│       ├── index.php
│       ├── network.php
│       ├── plain_page.php
│       └── update.php
├── dependents                      # 通用的依赖的js、css库
│   ├── css
│   ├── fonts
│   ├── images
│   ├── js
│   ├── smarty                      # smarty lib
│   └── useful
├── LICENSE
├── Makefile                        # make依赖的Makefile文件，会调用bin/auto文件执行相关操作
├── output                          # bin/auto执行的输出目录
├── README.md
└── templates                       # 本websit依赖gentelella UI框架，并使用smarty作为template解析库
    ├── gentelella
    │   ├── base.php                # 基板
    │   ├── foot.php                
    │   ├── head.php
    │   ├── nav.php
    │   └── tail.php
    └── smarty
        └── SmartySetup.php         # smarty setup file

24 directories, 128 files
```
