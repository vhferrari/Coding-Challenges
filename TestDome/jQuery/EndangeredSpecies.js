function endangeredSpecies(continent, species) {
  const list = document.getElementsByTagName("UL");
    var i = 0;
    for (i=0;i<list.length;i++)
    {
        if($(list[i]).data('continent')==continent)
        {
            const childrenEl = list[i].children;
            var j = 0;
            for (j=0;j<childrenEl.length;j++)
            {
                if($(childrenEl[j]).data('species')==species)
                {
                    return childrenEl[j].innerHTML;
                }
                else
                {
                    continue;
                }
            }      
        }
        else
        {
            continue;
        }
    }
}

// Example case
$('body').html(
  `<div>
    <ul data-continent="North America">
      <li data-species="California condor">Critically Endangered</li>
      <li data-species="American bison">Near Threatened</li>
    </ul>
    <ul data-continent="Europe">
      <li data-species="Cave bear">Extinct</li>
    </ul>
  </div>`
);

console.log(endangeredSpecies('North America', 'American bison')); // should print 'Near Threatened'
