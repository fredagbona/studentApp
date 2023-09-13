# Simple API for Students Manage 

It's a php-native api to perform CRUD operations on Student Entity

### API Endpoints
---------------

Below are described the REST endpoints available that you can use to manage students

- Get All Students and their sinformations
---------------

```php
GET /api/reads.php
```

- Get Single Student Informations by matricule
---------------

```php
GET /api/read.php/?matricule=ST988942
```

- Create Student
---------------

```sh
POST /api/create.php
```

Body
---------------

```json
{
    "matricule": "ST123941",
    "nom": "Doe",
    "prenom": "John",
    "sexe": "Homme",
    "dateDeNaissance": "2002-12-12",
    "telephone": 54123684
}
```

- Update Student Informations
---------------

```php
PUT /api/update.php/?matricule=ST988942
```

Body

```json
{
    "matricule": "ST214790",
    "nom": "Gates",
    "prenom": "Bill",
    "sexe": "Homme",
    "dateDeNaissance": "2023-09-06",
    "telephone": 32147863
}
```

- Delete Single Student
---------------

```php
DELETE /api/delete.php/?matricule=ST988942
```

### Response Example
---------------

```php
GET /api/reads.php
```

```json
[
    {
        "matricule": "ST988942",
        "0": "ST988942",
        "nom": "AZR",
        "1": "AZR",
        "prenom": "Serges R.",
        "2": "Serges R.",
        "sexe": "Homme",
        "3": "Homme",
        "dateDeNaissance": "2000-12-12",
        "4": "2000-12-12",
        "telephone": 54123688,
        "5": 54123688
    },
    {
        "matricule": "ST982018",
        "0": "ST982018",
        "nom": "GANSE",
        "1": "GANSE",
        "prenom": "Freshnelle Belle",
        "2": "Freshnelle Belle",
        "sexe": "Femme",
        "3": "Femme",
        "dateDeNaissance": "2023-09-27",
        "4": "2023-09-27",
        "telephone": 45127896,
        "5": 45127896
    },
    {
        "matricule": "ST982017",
        "0": "ST982017",
        "nom": "ASSAN",
        "1": "ASSAN",
        "prenom": "Horacia",
        "2": "Horacia",
        "sexe": "Femme",
        "3": "Femme",
        "dateDeNaissance": "2001-12-12",
        "4": "2001-12-12",
        "telephone": 95632147,
        "5": 95632147
    },
    {
        "matricule": "ST21457896",
        "0": "ST21457896",
        "nom": "ACO",
        "1": "ACO",
        "prenom": "Serges",
        "2": "Serges",
        "sexe": "Homme",
        "3": "Homme",
        "dateDeNaissance": "2023-09-24",
        "4": "2023-09-24",
        "telephone": 23654781,
        "5": 23654781
    },
    {
        "matricule": "ST205369",
        "0": "ST205369",
        "nom": "ADE",
        "1": "ADE",
        "prenom": "Charles",
        "2": "Charles",
        "sexe": "Homme",
        "3": "Homme",
        "dateDeNaissance": "2001-09-04",
        "4": "2001-09-04",
        "telephone": 56321478,
        "5": 56321478
    },
    {
        "matricule": "ST1402369",
        "0": "ST1402369",
        "nom": "RENOM",
        "1": "RENOM",
        "prenom": "Durand",
        "2": "Durand",
        "sexe": "Homme",
        "3": "Homme",
        "dateDeNaissance": "2000-10-24",
        "4": "2000-10-24",
        "telephone": 95563214,
        "5": 95563214
    },
    {
        "matricule": "ST123941",
        "0": "ST123941",
        "nom": "Durand",
        "1": "Durand",
        "prenom": "Bill Wayne",
        "2": "Bill Wayne",
        "sexe": "Homme",
        "3": "Homme",
        "dateDeNaissance": "2002-12-12",
        "4": "2002-12-12",
        "telephone": 54123684,
        "5": 54123684
    }
]
```


### Link to front-end part of App
---------------

[Click here](https://github.com/fredagbona/frontStudentApp "Front-end part").

Feel free to clone it and adapt to your projects !