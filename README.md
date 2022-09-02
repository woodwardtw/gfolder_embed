# gfolder_embed
WordPress shortcode for embedding Google Folders

Options include a list or grid style and you can manually set the height/width. 

An optional resourckey parameter was added based on (this issue)[https://github.com/woodwardtw/gfolder_embed/issues/5].

Still can't seem to sort because Google doesn't want me to.

## Grid-style example
```wordpress
[gdrive id="YourFolderID" style="grid" width="100%" height="400px"]
```

## List-style example
```wordpress
[gdrive id="YourFolderID" style="list" width="100%" height="800px"]
```
## Full options
 [gdrive id="YourFolderID" style="grid or list" width="" height="" resourcekey="may be needed in some cases"]