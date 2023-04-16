// Define an array of clues and answers for the game
const clues = [
    {
        text: "Stepping out? Wear me first! I’ll protect your feet from the worst.",
        image: "https://rukminim1.flixcart.com/image/416/416/k3xcdjk0/cloth-dryer-stand/g/j/c/ashape-wooden-coat-rack-house-of-quirk-original-imafmxzrzgrsefah.jpeg?q=70",
        answer: "shoes"
    },
    {
        text: "By the TV is where I can be found, thanks to my buttons I provide all the sound",
        image: "https://www.vizio.com/content/dam/vizio/2021/2021-remote/Lifestyle-SCUI-remote-min.png",
        answer: "remote"
    },
    {
        text: " You can find me on a hook, if you know where exactly to look.",
        image: "https://i.ytimg.com/vi/EIzCYt4_few/maxresdefault.jpg",
        answer: "keys"
    },
	{
        text: "You will find me laying on the floor, welcoming you at the door.",
        image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKhPv7BVT7ZX4E7fcBc2ZPstaScagEXP00vwRPG0qxfv5-GsvCI-Wrel81bvQVwvLF2a8&usqp=CAU",
        answer: "doormat"
    },
	{
        text: "When the wind blows, I wave to you. Sometimes I am red, white and blue.",
        image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREmlcwF6OhdWpZUWLtPuOExSFzFdWWWrLRQg&usqp=CAU",
        answer: "flag"
    },
	{
        text: "I go up as soon as the rain comes down.Who am I?",
        image: "https://cdn.home-designing.com/wp-content/uploads/2022/03/stylish-entryway-shoe-rack-for-tall-boots-sneakers-slippers-slatted-shelves-with-umbrella-holder-eco-friendly-bamboo-furniture-for-sale-cheap-online-fast-shipping-600x600.jpg",
        answer: "umbrella"
    },
	
	
];

// Shuffle the clues array using the Fisher-Yates shuffle algorithm
function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
}

shuffleArray(clues);

// Get references to HTML elements
const clueElement = document.getElementById("clue");
const imageContainer = document.getElementById("image-container");
const answerInput = document.getElementById("answer-input");
const button = document.getElementById("button");

// Initialize the game
let currentClueIndex = 0;
let attempts = 0; // Keep track of the number of attempts
clueElement.textContent = clues[currentClueIndex].text;
const image = document.createElement("img");
image.src = clues[currentClueIndex].image;
imageContainer.appendChild(image);

// Define a function to display the next clue or end the game
function displayNextClue() {
    // Get the user's answer
    const answer = answerInput.value.trim().toLowerCase();

    // If the answer is correct, display the next clue
    if (answer === clues[currentClueIndex].answer) {
        // Remove the current clue and image
        clueElement.textContent = "";
        imageContainer.removeChild(image);

        // Increment the current clue index and reset attempts counter
        currentClueIndex++;
        attempts = 0;

        // If we've reached the end of the clues, display a congratulations message
        if (currentClueIndex >= clues.length) {
            clueElement.textContent = "Congratulations, you found the treasure!";
            answerInput.disabled = true;
            button.disabled = true;
        } else {
            // Display the next clue and image
            clueElement.textContent = clues[currentClueIndex].text;
            image.src = clues[currentClueIndex].image;
            imageContainer.appendChild(image);

            // Clear the answer input
            answerInput.value = "";
        }
    } else {
        // Increment the attempts counter
        attempts++;

        if (attempts >= 5) {
            // Display the correct answer and disable the input and button
            clueElement.textContent = `Sorry, that's not correct. The correct answer was "${clues[currentClueIndex].answer}". Game over.`;
            answerInput.disabled = true;
            button.disabled = true;
        } else {
            // Display an error message
            clueElement.textContent = `Sorry, that's not correct. You have ${5 - attempts} attempts left. Here's the current clue: ${clues[currentClueIndex].text}`;
        }
    }
}

// Add an event listener to the button to display the next clue or end the game
button.addEventListener("click", displayNextClue);
