# 框架目录说明 

.
├── bin                             
│   └── auto                        # 会被Makefile调用的可执行文件，会自动处理文件合成、拷贝等县官相关事务 
├── common                          # 一些不能被合成的php文件，自定义的css、js文件
│   ├── css
│   ├── js
│   ├── loginDealWith.php
│   └── login.php
├── contents                        # 可以被合成的php文件，只需要专注于写内容就OK，完全支持bootstrap。
│   ├── about.php
│   ├── customerData.php
│   ├── customerSettings.php
│   ├── dataAndCalander.php
│   ├── hardware.php
│   ├── index.php
│   ├── network.php
│   ├── plain_page.php
│   └── update.php
├── dependents                      # 通用的依赖的js、css库
│   ├── css
│   ├── fonts
│   ├── images
│   ├── js
│   ├── smarty
│   └── useful
├── Makefile                        # make依赖的Makefile文件，会调用bin/auto文件执行相关操作
├── output                          # bin/auto执行的输出目录
│   ├── about.php
│   ├── css
│   ├── customerData.php
│   ├── customerSettings.php
│   ├── dataAndCalander.php
│   ├── fonts
│   ├── hardware.php
│   ├── images
│   ├── index.php
│   ├── js
│   ├── loginDealWith.php
│   ├── login.php
│   ├── network.php
│   ├── plain_page.php
│   ├── smarty
│   ├── tpl
│   ├── update.php
│   └── useful
├── README.md                       
└── templates                       # 本websit依赖gentelella UI框架，并使用smarty作为template解析库
    ├── gentelella
    └── smarty

23 directories, 25 files
