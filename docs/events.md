# Events

### BeforeInitialization

> threedpcadmin\LaravelFileManager\Events\BeforeInitialization

Example:

```php
\Event::listen('threedpcadmin\LaravelFileManager\Events\BeforeInitialization',
    function ($event) {
        
    }
);
```

### DiskSelected

> threedpcadmin\LaravelFileManager\Events\DiskSelected

Example:

```php
\Event::listen('threedpcadmin\LaravelFileManager\Events\DiskSelected',
    function ($event) {
        \Log::info('DiskSelected:', [$event->disk()]);
    }
);
```

### FilesUploading

> threedpcadmin\LaravelFileManager\Events\FilesUploading

```php
\Event::listen('threedpcadmin\LaravelFileManager\Events\FilesUploading',
    function ($event) {
        \Log::info('FilesUploading:', [
            $event->disk(),
            $event->path(),
            $event->files(),
            $event->overwrite(),
        ]);
    }
);
```

### FilesUploaded

> threedpcadmin\LaravelFileManager\Events\FilesUploaded

```php
\Event::listen('threedpcadmin\LaravelFileManager\Events\FilesUploaded',
    function ($event) {
        \Log::info('FilesUploaded:', [
            $event->disk(),
            $event->path(),
            $event->files(),
            $event->overwrite(),
        ]);
    }
);
```

### Deleting

> threedpcadmin\LaravelFileManager\Events\Deleting

```php
\Event::listen('threedpcadmin\LaravelFileManager\Events\Deleting',
    function ($event) {
        \Log::info('Deleting:', [
            $event->disk(),
            $event->items(),
        ]);
    }
);
```

### Deleted

> threedpcadmin\LaravelFileManager\Events\Deleted

```php
\Event::listen('threedpcadmin\LaravelFileManager\Events\Deleted',
    function ($event) {
        \Log::info('Deleted:', [
            $event->disk(),
            $event->items(),
        ]);
    }
);
```

### Paste

> threedpcadmin\LaravelFileManager\Events\Paste

```php
\Event::listen('threedpcadmin\LaravelFileManager\Events\Paste',
    function ($event) {
        \Log::info('Paste:', [
            $event->disk(),
            $event->path(),
            $event->clipboard(),
        ]);
    }
);
```

### Rename

> threedpcadmin\LaravelFileManager\Events\Rename

```php
\Event::listen('threedpcadmin\LaravelFileManager\Events\Rename',
    function ($event) {
        \Log::info('Rename:', [
            $event->disk(),
            $event->newName(),
            $event->oldName(),
            $event->type(), // 'file' or 'dir'
        ]);
    }
);
```

### Download

> threedpcadmin\LaravelFileManager\Events\Download

```php
\Event::listen('threedpcadmin\LaravelFileManager\Events\Download',
    function ($event) {
        \Log::info('Download:', [
            $event->disk(),
            $event->path(),
        ]);
    }
);
```

*When using a text editor, the file you are editing is also downloaded! And this event is triggered!*

### DirectoryCreating

> threedpcadmin\LaravelFileManager\Events\DirectoryCreating

```php
\Event::listen('threedpcadmin\LaravelFileManager\Events\DirectoryCreating',
    function ($event) {
        \Log::info('DirectoryCreating:', [
            $event->disk(),
            $event->path(),
            $event->name(),
        ]);
    }
);
```

### DirectoryCreated

> threedpcadmin\LaravelFileManager\Events\DirectoryCreated

```php
\Event::listen('threedpcadmin\LaravelFileManager\Events\DirectoryCreated',
    function ($event) {
        \Log::info('DirectoryCreated:', [
            $event->disk(),
            $event->path(),
            $event->name(),
        ]);
    }
);
```

### FileCreating

> threedpcadmin\LaravelFileManager\Events\FileCreating

```php
\Event::listen('threedpcadmin\LaravelFileManager\Events\FileCreating',
    function ($event) {
        \Log::info('FileCreating:', [
            $event->disk(),
            $event->path(),
            $event->name(),
        ]);
    }
);
```

### FileCreated

> threedpcadmin\LaravelFileManager\Events\FileCreated

```php
\Event::listen('threedpcadmin\LaravelFileManager\Events\FileCreated',
    function ($event) {
        \Log::info('FileCreated:', [
            $event->disk(),
            $event->path(),
            $event->name(),
        ]);
    }
);
```

### FileUpdate

> threedpcadmin\LaravelFileManager\Events\FileUpdate

```php
\Event::listen('threedpcadmin\LaravelFileManager\Events\FileUpdate',
    function ($event) {
        \Log::info('FileUpdate:', [
            $event->disk(),
            $event->path(),
        ]);
    }
);
```

### Zip

> threedpcadmin\LaravelFileManager\Events\Zip

```php
\Event::listen('threedpcadmin\LaravelFileManager\Events\Zip',
    function ($event) {
        \Log::info('Zip:', [
            $event->disk(),
            $event->path(),
            $event->name(),
            $event->elements(),
        ]);
    }
);
```

### ZipCreated

> threedpcadmin\LaravelFileManager\Events\ZipCreated

```php
\Event::listen('threedpcadmin\LaravelFileManager\Events\ZipCreated',
    function ($event) {
        \Log::info('ZipCreated:', [
            $event->disk(),
            $event->path(),
            $event->name(),
            $event->elements(),
        ]);
    }
);
```

### ZipFailed

> threedpcadmin\LaravelFileManager\Events\ZipCreated

```php
\Event::listen('threedpcadmin\LaravelFileManager\Events\ZipFailed',
    function ($event) {
        \Log::info('ZipFailed:', [
            $event->disk(),
            $event->path(),
            $event->name(),
            $event->elements(),
        ]);
    }
);
```

### Unzip

> threedpcadmin\LaravelFileManager\Events\Unzip

```php
\Event::listen('threedpcadmin\LaravelFileManager\Events\Unzip',
    function ($event) {
        \Log::info('Unzip:', [
            $event->disk(),
            $event->path(),
            $event->folder(),
        ]);
    }
);
```

### UnzipCreated

> threedpcadmin\LaravelFileManager\Events\UnzipCreated

```php
\Event::listen('threedpcadmin\LaravelFileManager\Events\UnzipCreated',
    function ($event) {
        \Log::info('UnzipCreated:', [
            $event->disk(),
            $event->path(),
            $event->folder(),
        ]);
    }
);
```

### UnzipFailed

> threedpcadmin\LaravelFileManager\Events\UnzipFailed

```php
\Event::listen('threedpcadmin\LaravelFileManager\Events\UnzipFailed',
    function ($event) {
        \Log::info('UnzipFailed:', [
            $event->disk(),
            $event->path(),
            $event->folder(),
        ]);
    }
);
```
