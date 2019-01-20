var data = 
  [
    {
      "name": "SK-II Facial Treatment Essence",
      "ing": "Galactomyces Ferment Filtrate (Pitera), Butylene Glycol, Pentylene Glycol, Water, Sodium Benzoate, Methylparaben, Sorbic Acid",
      "price": 225
    },
    {
      "name": "Drunk Elephant: B-Hydra™ Intensive Hydration Serum",
      "ing": "Water, Coconut Alkanes, Ammonium Acryloyldimethyltaurate/VP Copolymer, Glycerin, Pentylene Glycol, Sclerocarya Birrea Seed Oil, Wheat Amino Acids, Ananas Sativus (Pineapple) Fruit Extract, Berberis Vulgaris Root Extract, Citrullus Lanatus (Watermelon) Fruit Extract, Lens Esculenta (Lentil) Fruit Extract, Pyrus Malus (Apple) Fruit Extract, Coco-Caprylate/Caprate, Panthenol, Sodium PCA, Sodium Hyaluronate Crosspolymer, Dipotassium Glycyrrhizate, Niacinamide, Cyclodextrin, Sodium Hyaluronate, Sodium Lactate, Phenoxyethanol, Hydroxyproline, Trisodium Ethylenediamine Disuccinate, Citric Acid, Caprylyl Glycol, Chlorphenesin, Ethylhexylglycerin",
      "price": 65
    }
    ]

var productInfo = []

for (var x in data){

  var y = JSON.parse(JSON.stringify(data[x]))
  productInfo.push([y.name, y.ing.split(', '), y.price]);
}

function includes(key, array){
  return (array.indexOf(key) > -1)
}

function suitable(allergens, ingredients){
  if (allergens.length == 0){
    return true
  }
  else if (includes(allergens[0], ingredients)){
    return false;
  } 
  else{
    allergens.shift();
    return suitable(allergens, ingredients)
  }
}

function getProducts(allergens, productList){
  var match = [];

  for (var x in productList){
    if (suitable(allergens, productList[x][1])){
      match.push([productList[x][0], productList[x][1]])
    }
  }

  return match;
}


var a = ["grass","wheat","Butylene Glycol"]
var b = ["milk", "watermelon"]

k = getProducts(a, productInfo)

