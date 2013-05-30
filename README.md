vim-laravel3-snippets
=====================

This is the snippets file for Laravel 3. You can use

> `:set ft=php.laravel`

to enable it in current buffer, or just add the following line to .vimrc

> `autocmd FileType php set ft=php.laravel`

to enable it for every php files.

Or, You also can set the filetype based on directory, like

> `autocmd BufNewFile,BufRead ~/proj/src/php/laravel/*.php setlocal filetype=php.laravel`

Thanks [@tlvince](https://github.com/tlvince) provide this [tips](https://github.com/markwu/vim-laravel3-snippets/issues/2)

BTW, you will need [SnipMate](https://github.com/garbas/vim-snipmate) or [UltiSnips](https://github.com/SirVer/ultisnips) for using this snippets.

Most important is, this snippets based on [laravel 3 for sublime text](https://github.com/laravel/sublime-snippets) from [@daylerees](https://github.com/daylerees)

Mark
