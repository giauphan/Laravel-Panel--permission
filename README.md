# install 
```
git clone https://github.com/giauphan/Laravel-Panel--permission.git project
cd project
composer instal
```

# Run migration
```
 cp .env.example .env
php artisan migrate --seed
```

# Start 
```
php artisan key:generate
php artisan serve
```

port 8000 : http://localhost:8000
on cpanel : http://localhost:8000/admin 

# Create branch
Change ``branch_name`` to Name my task

```
git checkout -b Branch_Name
```

and push code to github

