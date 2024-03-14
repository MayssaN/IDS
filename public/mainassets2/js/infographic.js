// Function to handle hover changes for specific IDs and their associated classes
function handleHoverChanges(idClassMap) {
    Object.keys(idClassMap).forEach(id => {
        const element = document.getElementById(id);
        if (element) {
            element.addEventListener('mouseenter', () => {
                const classes = idClassMap[id];
                classes.forEach(className => {
                    const elementsToChange = document.getElementsByClassName(className);
                    for (let i = 0; i < elementsToChange.length; i++) {
                        elementsToChange[i].classList.add('transition-fill'); // Add transition class
                        elementsToChange[i].classList.remove('reset-fill'); // Remove reset class
                    }
                });
            });

            element.addEventListener('mouseleave', () => {
                const classes = idClassMap[id];
                classes.forEach(className => {
                    const elementsToChange = document.getElementsByClassName(className);
                    for (let i = 0; i < elementsToChange.length; i++) {
                        elementsToChange[i].classList.remove('transition-fill'); // Remove transition class
                        elementsToChange[i].classList.add('reset-fill'); // Add reset class
                    }
                });
            });
        }
    });
}

// Usage: Call the function with an object mapping IDs to their associated classes
handleHoverChanges({
    'id1': ['IDS-RGPD-BG'],
    'id2': ['IDS-DIAG-BG'],
    'id3': ['IDS-CYBER-BG'],
    'id4': ['IDS-SERVE-BG'],
    'id5': ['IDS-DEVICES-BG'],
    'id6': ['IDS-CONNECT-BG'],
    'id7': ['IDS-SAVE-BG'],
    'id8': ['IDS-SUPERVISION-BG'],
    // 'id2': ['IDS-SERVE-BG'],
    // Add more ID-class mappings as needed
});
