# Link Vault 🔒🔗

## Forge Deployment Script

```bash
php artisan migrate
php artisan optimize:clear
php artisan optimize
php artisan scout:import "App\Models\Link"
```

# Local Development

Make sure you have a queue up and running to process your links in the background.

```bash
php artisan queue:work --tries=3
```