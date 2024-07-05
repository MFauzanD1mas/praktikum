function hitungtotal() {
    const rentalDateInput = document.getElementById('tanggal');
    const rentalDaysInput = document.getElementById('hari');
    const totalPriceInput = document.getElementById('totalharga');

    const rentalDate = new Date(rentalDateInput.value);
    const rentalDays = parseInt(rentalDaysInput.value);

    const itemPrices = {
        'Nikon P1000 Zoom Bulan': 20000,
        'Kamera Film Zoom 100x' : 1000000,
        'Nikon Analog Biar Kece': 30000,
        'FujiFilm Efek Beauty'  : 15000,
        'Canon Kamera Anak Hits': 20000,
        'Sony Pro Experia'     : 30000
    };

    const renItems = document.getElementsByName('rental[]');
    let totalPrice = 0;

    for (let i = 0; i < renItems.length; i++) {
        if (renItems[i].checked) {
            const itemName = renItems[i].value;
            totalPrice += itemPrices[itemName];
        }
    }

    totalPrice *= rentalDays;

    const totalharga = totalPrice.toLocaleString();

    totalPriceInput.value = totalharga;
}

document.getElementById('tanggal').addEventListener('change', hitungtotal);
document.getElementById('hari').addEventListener('change', hitungtotal);
