# Instruktioner för vuxhalland.se


## Hämta hem webbplatsen via Git till den folder på servern där webbplatsen skall ligga

```sh
git clone https://github.com/RegionHalland/vuxhalland.se.git .
```

## Checka ut en release på servern

```sh
git checkout v1.0.0
```

## Installera en .env-fil på servern med nödvändiga variabler
Filen skall innehålla t.ex. ACF-nyckel, namn på databas, hem-url o. dyl. 

## Kör composer update i roten samt i web/app/themes/regionhalland
Du bör nu kunna nå Wordpress webbinstallerare från din sajts URL. Om du har en databaskopia från t.ex. en stage-miljö eller lokal installation kan du nu importera den. 


# Egna region-halland-plugins som används (för övriga: se composer.json i roten)

```sh
    
    "regionhalland/region-halland-acf-add-theme-subpage": "1.0.0",
    "regionhalland/region-halland-acf-cookie-notice": "1.0.0",
    "regionhalland/region-halland-acf-page-education-repeater": "1.4.0",
    "regionhalland/region-halland-main-post-settings-vuxhalland": "1.0.1",
    "regionhalland/region-halland-breadcrumbs-pages": "1.1.1",
    "regionhalland/region-halland-find-on-page": "1.1.0",
    "regionhalland/region-halland-prepare-the-content": "1.0.0",
    "regionhalland/region-halland-single-page-information": "1.0.0",
    "regionhalland/region-halland-tree-first-level": "1.1.0",
    "regionhalland/region-halland-acf-page-links-blurbs": "1.4.2",
    "regionhalland/region-halland-page-children": "1.1.0",
    "regionhalland/region-halland-parent-page": "1.0.0",
    "regionhalland/region-halland-acf-page-menu-text": "1.0.0",
    "regionhalland/region-halland-acf-pro-5-6-8": "5.6.8"
  ```
    
## Versionshistorik
    
    1.0.0 Första releasen
