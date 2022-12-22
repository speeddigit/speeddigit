# xDebug (PHP Debugger) Installation and configuration

1. Download .dll (For windows) or .so file from xdebug website: https://xdebug.org/download#releases
2. Edit your php.ini file as below

```
zend_extension=C:\laragon\bin\php\php-8.1.9-Win32-vs16-x64\ext\php_xdebug.dll
xdebug.mode = debug
xdebug.start_with_request = yes
xdebug.remote_autostart=on
xdebug.client_host=localhost
xdebug.client_port = 9003
xdebug.remote_enable=1
xdebug.remote_host=localhost
xdebug.remote_port=9003
xdebug.remote_connect_back = 1 
xdebug.idekey = VSCODE
```

Replace first line `zend_extension=C:\laragon\bin\php\php-8.1.9-Win32-vs16-x64\ext\php_xdebug.dll` as your php ext path. For linux user it should be `zend_extension=/your/path/php_xdebug_any_version.so`
3. Install PHP Debug extension https://marketplace.visualstudio.com/items?itemName=xdebug.php-debug from here
4. Create a .vscode/launch.json file inside your project root directory. and replace with these configuration - 
   ```
    {
        // Use IntelliSense to learn about possible attributes.
        // Hover to view descriptions of existing attributes.
        // For more information, visit: https://go.microsoft.com/fwlink/?linkid=830387
        "version": "0.2.0",
        "configurations": [
            {
                "name": "Laravel Listen for XDebug",
                "type": "php",
                "request": "launch",
                "port": 9003
            },
            {
                "name": "Launch currently open script",
                "type": "php",
                "request": "launch",
                "program": "${file}",
                "cwd": "${fileDirname}",
                "port": 9003
            }
        ]
    }
   ```
5. Go to any php/laravel project and set breakpoints
6. Execute or Go to desired page/route that hit those break-points
7. Come to editor and enjoy debugging