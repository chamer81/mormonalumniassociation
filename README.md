# mormonalumniassociation
MAA Books website

The debian-based Dockerfile in this repo is no longer used. This app should be run using the standard php dockerfiles. Here's a one-liner to run it locally:

```
docker run -d -p 8080:80 --name my-apache-php-app -v mormonalumniassociation.org/public:/var/www/html php:7.2-apache
```

The live k8s version puts the data files in a volume. The command to update them is the following:
```
rsync -avz mormonalumniassociation.org/public rayquaza:/export/data/maa-prod
```

The cover images should be named: 
- cover_sm.png (width 125 pixels)
- cover_med.png (width 300 pixels)
