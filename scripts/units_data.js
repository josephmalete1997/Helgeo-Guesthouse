async function getUnits() {
    try {
        const response = await fetch('./config/get_units.php', {
            method: "GET"
        });

        if (!response.ok) {
            throw new Error('Network response was not ok');
        }

        const result = await response.json();
        const units = [{
                name: result[0].name,
                features: [
                    `<i class="fa-solid fa-tv"></i> LCD TV`,
                    `<i class="fa-solid fa-chair"></i> Study table and chair`,
                    `<i class="fa-solid fa-fire-burner"></i> Stove`,
                    `<i class="fa-solid fa-calendar-week"></i> Microwave oven`,
                    `<i class="fa-solid fa-box"></i> Fridge`,
                    `<span style="display:flex;flex-direction: column;"><i class="fa-solid fa-square"></i><i class="fa-solid fa-square"></i></span> Wardrobe`,
                    `<i class="fa-solid fa-bed"></i> Double bed`,
                    `<i class="fa-solid fa-bath"></i> Bathroom`,
                    `<i class="fa-solid fa-fan"></i> Fan`,
                    `<i class="fa-solid fa-couch"></i> Sofa`,
                ],
                photos: [
                    './gallery_images/unit1/a8.jpg',
                    './gallery_images/unit1/a1.jpg',
                    './gallery_images/unit1/a2.jpg',
                    './gallery_images/unit1/a3.jpg',
                    './gallery_images/unit1/a4.jpg',
                    './gallery_images/unit1/a5.jpg',
                    './gallery_images/unit1/a6.jpg',
                    './gallery_images/unit1/a7.jpg',
                ],
                catering: 'Self-Catering',
                floorPlan: `./plans/two_a.png`,
                price: result[0].price
            },
            {
                name: result[1].name,
                features: [
                    `<i class="fa-solid fa-tv"></i> LCD TV`,
                    `<i class="fa-solid fa-box"></i> Fridge`,
                    `<i class="fa-solid fa-bed"></i> Double bed`,
                    `<i class="fa-solid fa-bath"></i> Bathroom`,
                    `<i class="fa-solid fa-fan"></i> Fan`,
                    `<i class="fa-solid fa-couch"></i> Sofa`,
                ],
                photos: [
                    './gallery_images/unit2/b1.jpg',
                    './gallery_images/unit2/b2.jpg',
                    './gallery_images/unit2/b3.jpg',
                    './gallery_images/unit2/b4.jpg',
                    './gallery_images/unit2/b5.jpg',
                    './gallery_images/unit2/b6.jpg',
                    './gallery_images/unit2/b7.jpg',
                    './gallery_images/unit2/b8.jpg',
                    './gallery_images/unit2/b9.jpg',
                    './gallery_images/unit2/b10.jpg',
                ],
                catering: 'Standard',
                floorPlan: `./plans/two_b.png`,
                price: result[1].price
            },
            {
                name: result[2].name,
                features: [
                    `<i class="fa-solid fa-tv"></i> LCD TV`,
                    `<i class="fa-solid fa-chair"></i> Bar chairs`,
                    `<i class="fa-solid fa-fire-burner"></i> Stove`,
                    `<i class="fa-solid fa-calendar-week"></i> Kitchen unit and counter`,
                    `<i class="fa-solid fa-box"></i> Fridge`,
                    `<span style="display:flex;flex-direction: column;"><i class="fa-solid fa-square"></i><i class="fa-solid fa-square"></i></span>x2 Wardrobe`,
                    `<i class="fa-solid fa-bed"></i> x2 Bedroom`,
                    `<i class="fa-solid fa-bath"></i> x2 Bathroom`,
                    `<i class="fa-solid fa-fan"></i> Fan`,
                    `<i class="fa-solid fa-couch"></i> Sofa`,
                ],
                photos: [
                    './gallery_images/unit3/c1.jpg',
                    './gallery_images/unit3/c2.jpg',
                    './gallery_images/unit3/c3.jpg',
                    './gallery_images/unit3/c4.jpg',
                    './gallery_images/unit3/c5.jpg',
                    './gallery_images/unit3/c6.jpg',
                    './gallery_images/unit3/c7.jpg',
                ],
                catering: 'Self-Catering',
                floorPlan: `./plans/four.png`,
                price: result[2].price
            },
            {
                name: result[3].name,
                features: [
                    `<i class="fa-solid fa-tv"></i> LCD TV`,
                    `<i class="fa-solid fa-chair"></i> Bar chairs`,
                    `<i class="fa-solid fa-fire-burner"></i> Stove`,
                    `<i class="fa-solid fa-calendar-week"></i> Kitchen unit and counter`,
                    `<i class="fa-solid fa-box"></i> Fridge`,
                    `<span style="display:flex;flex-direction: column;"><i class="fa-solid fa-square"></i><i class="fa-solid fa-square"></i></span>x3 Wardrobe`,
                    `<i class="fa-solid fa-bed"></i> x3 Bedroom`,
                    `<i class="fa-solid fa-bath"></i> Bathroom`,
                    `<i class="fa-solid fa-fan"></i> Fan`,
                    `<i class="fa-solid fa-couch"></i> Lounge`,
                ],
                photos: [
                    './gallery_images/unit4/d1.jpg',
                    './gallery_images/unit4/d3.jpg',
                    './gallery_images/unit4/d2.jpg',
                    './gallery_images/unit4/d4.jpg',
                    './gallery_images/unit4/d5.jpg',
                    './gallery_images/unit4/d6.jpg',
                    './gallery_images/unit4/d7.jpg',
                    './gallery_images/unit4/d8.jpg',
                    './gallery_images/unit4/d9.jpg',
                    './gallery_images/unit4/d10.jpg',
                ],
                catering: 'Self-Catering',
                floorPlan: `./plans/six.png`,
                price: result[3].price
            },
        ];

        return units;
    } catch (error) {
        console.error('Failed to fetch units:', error);
    }
}

(async() => {
    const units = await getUnits();
})()

export default getUnits;