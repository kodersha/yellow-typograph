Typograph extension
===================
Typograph for [Yellow CMS](https://github.com/datenstrom/yellow).

Install
-------
Download [this extension](https://github.com/kodersha/yellow-typograph/archive/master.zip), put `zip` archive into your `system` folder.

To uninstall delete all plugin files.

Required
--------
[Blog](https://github.com/annaesvensson/yellow-blog) extension.

How use?
--------

Open `system\layouts\blog.html` file.

Replace:

```
<?php echo $this->yellow->page->getContentHtml() ?>
```

To:

```
<?= (new YellowTypograph())->applyTypograph($this->yellow->page->getContentHtml()); ?>
```

You can apply `typograph` in any text output location by analogy.

Used
-------
* **[Evgeny Muravjev Typograph](https://github.com/emuravjev/mdash)**.