 

# TACO API  
  
  Brazilian Food Composition Table is an API written in PHP to help in the development of some applications
The API provides a REST-based API that allows access to databases in a simple and organized way
 
 
## Return Examples 
Currently the database contains more than a thousand items
+ The list of items can be obtained using
https://foodcomposition.herokuapp.com/item

```
{
    "success": true,
    "code": 200,
    "message": "Composição de alimentos por 100 gramas de parte comestível",
    "count": 1121,
    "foods": [
        "Arroz (polido, parboilizado, agulha, agulhinha, etc.)",
        "Arroz integral",
        "Milho (em grão)",
        "Canjiquinha de milho em grão",
        "Xerém de milho",
        "Amendoim (em grão) in natura",
        "Ervilha em grão",
        "Fava (em grão)",
        "Mangalô amargo em grão",
        "Feijão-de-corda",
        "Feijão-verde",
        "Semente de linhaça"
    ]
}
```

+ A specific item can be searched by name or id
https://foodcomposition.herokuapp.com/item/Macaxeira

```
{
    "success": true,
    "code": 200,
    "message": "Composição de alimentos por 100 gramas de parte comestível",
    "found": 3,
    "items": [
        {
            "name": "Macaxeira",
            "id": "6400610",
            "category": "Hortaliças tuberosas",
            "nutritionFacts": {
                "Cru(a)": {
                    "Energia(kcal)": "125",
                    "Proteína(g)": "0,6",
                    "Lipídios totais(g)": "0,3",
                    "Carboidratos(g)": "30,1",
                    "Fibra Alimentar(g)": "1,6",
                    "Colesterol(mg)": "-",
                    "AG Saturados(g)": "0,1",
                    "AG Monoinsaturado(g)": "0,1",
                    "AG Poliinsaturados(g)": "0,1",
                    "AG Linoleico(g)": "0,05",
                    "AG Linolênico(g)": "0,01",
                    "AG Trans total(g)": "-",
                    "Açúcar total(g)": "-",
                    "Açúcar de adição(g)": "-",
                    "Cálcio(mg)": "19",
                    "Magnésio(mg)": "27",
                    "Manganês(mg)": "0,06",
                    "Fósforo(mg)": "22",
                    "Ferro(mg)": "0,1",
                    "Sódio(mg)": "1",
                    "Sódio de adição(mg)": "286",
                    "Potásio(mg)": "100",
                    "Cobre(mg)": "0,01",
                    "Zinco(mg)": "0,2",
                    "Selênio(mcg)": "-",
                    "Rotinol(mcg)": "-",
                    "Vitamina A (RAE)(mcg)": "-",
                    "Tiamina(mg)": "0,06",
                    "Riboflavina(mg)": "-",
                    "Niacina(mg)": "-",
                    "Niacina(NE)(mg)": "-",
                    "Piridoxina(mg)": "0,03",
                    "Cobalamina(mcg)": "-",
                    "Folato(DFE)(mg)": "-",
                    "Vitamina D(mcg)": "-",
                    "Vitamina E(mg)": "-",
                    "Vitamina C(mg)": "11,1"
                }
            }
        }
    ]
}
```
 
## Licença 
[MIT](https://choosealicense.com/licenses/mit/)

