const questions = [
    {
        question: "Fill in each of the numbered blanks with the correct form of the word given in brackets : <br> Students should know that sleep _(1)_ (enhance) memory. This is because the brain _(2)_ (need) rest to process and store the information we have _(3)_ (feed) into it. When we do not get the right amount of sleep, the brain is too blurry _(4)_ (retain) the information.",
        optionA: "enhanced, needed, fed, to retain",
        optionB: "enhances, needs, feed, to retain",
        optionC: "enhances, needs, fed, to retain",
        optionD: "enhances, needs, fed, retained",
        correctOption: "optionC"
    },

    {
        question: "A place of worship should promote an air ____ spirituality and peace.",
        optionA: "of",
        optionB: "for",
        optionC: "to",
        optionD: "with",
        correctOption: "optionA"
    },

    {
        question: "Rashmi has been suffering ____ influenza since last week.",
        optionA: "of",
        optionB: "form",
        optionC: "from",
        optionD: "with",
        correctOption: "optionC"
    },

    {
        question: "He went out ____ meet his friend.",
        optionA: "to",
        optionB: "for",
        optionC: "by",
        optionD: "on",
        correctOption: "optionA"
    },

    {
        question: "The political leaders take a different stand ____ this issue.",
        optionA: "against",
        optionB: "for",
        optionC: "to",
        optionD: "on",
        correctOption: "optionD"
    },

    {
        question: "Meghna insists ____ asking an apology for the misbehaviour.",
        optionA: "for",
        optionB: "on",
        optionC: "in",
        optionD: "by",
        correctOption: "optionB"
    },

    {
        question: "He shouted ____ the children for coming late.",
        optionA: "on",
        optionB: "for",
        optionC: "at",
        optionD: "with",
        correctOption: "optionC"
    },

    {
        question: "I entered his house _____ apprehension.",
        optionA: "for",
        optionB: "under",
        optionC: "with",
        optionD: "on",
        correctOption: "optionC"
    },

    {
        question: "The child has been sleeping ____ two hours.",
        optionA: "on",
        optionB: "for",
        optionC: "from",
        optionD: "since",
        correctOption: "optionB"
    },

    {
        question: "Join the following sentences to make one complete sentence without using and, but or so. <br> I have never seen such a savage spectacle. I am alarmed.",
        optionA: "I am alarmed to see such a savage spectacle.",
        optionB: "I am alarmed as I have never seen such a savage spectacle.",
        optionC: "Because I have never seen such a savage spectacle, I am alarmed.",
        optionD: "I have never seen such a savage spectacle so I am alarmed.",
        correctOption: "optionB"
    },

    {
        question: "Join the following sentences to make one complete sentence without using and, but or so. <br> You do not catch a taxi. You will not reach Kochi today.",
        optionA: "You will not reach Kochi today unless you catch a taxi.",
        optionB: "Catch a taxi today to reach Kochi today.",
        optionC: "Unless you don't catch taxi, you will not reach Kochi today.",
        optionD: "For reaching Kochi, you must catch taxi today.",
        correctOption: "optionA"
    },

    {
        question: "Join the following sentences to make one complete sentence without using and, but or so. <br> The kids are very weak. They cannot jump the wall.",
        optionA: "The kids are so weak that they cannot jump the wall.",
        optionB: "The kids are too weak to jump the wall.",
        optionC: "The kids are very weak to jump the wall.",
        optionD: "The kids are not strong to jump the wall.",
        correctOption: "optionB"
    },


    {
        question: "Join the following sentences to make one complete sentence without using and, but or so. <br> The mortality rates are decreasing. Many are health conscious.",
        optionA: "The mortality rates are decreasing cause many are health conscious.",
        optionB: "The mortality rates being decreasing, many are health conscious.",
        optionC: "The mortality rates are decreasing so many are health conscious.",
        optionD: "The mortality rates are decreasing as many are health conscious.",
        correctOption: "optionC"
    },


    {
        question: "Re-write the following sentences according to the instructions given after each. <br> People grow a lot of rubber in Malaysia. [Begin: A_]",
        optionA: "A lot of rubber is grown in Malaysia by people.",
        optionB: "A lot of rubber are grown in Malaysia.",
        optionC: "A lot of rubber is grown in Malaysia.",
        optionD: "A lot of rubber was grown in Malaysia by people.",
        correctOption: "optionC"
    },

    {
        question: "Re-write the following sentences according to the instructions given after each. <br> He tried harder and harder but achieved less and less. [Begin: The_]",
        optionA: "The harder he tried, the less he achieved.",
        optionB: "The harder he tried, the lesser he achieved.",
        optionC: "The hardest he tried, the lesser he achieved.",
        optionD: "The harder he tried, he achieved less.",
        correctOption: "optionA"
    },

    {
        question: "Re-write the following sentences according to the instructions given after each. <br> 'Shall I ask the driver to wait ?' said Pamela. [Change into Reported Speech]",
        optionA: "Pamela said she would ask the driver to wait.",
        optionB: "Pamela asked if she asked the driver to wait.",
        optionC: "Pamela asked the driver if he could wait.",
        optionD: "Pamela asked if she would ask the driver to wait.",
        correctOption: "optionD"
    },


    {
        question: "Re-write the following sentences according to the instructions given after each. <br> It was so late that I could not attend the class. [Use: too]",
        optionA: "It was too late that I could not attend the class.",
        optionB: "It was too late for me to attend the class.",
        optionC: "It was too late to attend the class.",
        optionD: "It was too late for me to not attend the class.",
        correctOption: "optionB"
    },


    {
        question: "Re-write the following sentences according to the instructions given after each. <br> Prizes were being given by the Minister when the lights went out. [Change the voice]",
        optionA: "The Minister had been giving the prizes when the lights went out.",
        optionB: "The Minister gave the prizes when the lights went out.",
        optionC: "The Minister was giving the prizes when the lights went out.",
        optionD: "The Minister has been giving the prizes when the lights went out.",
        correctOption: "optionC"
    },

    {
        question: "Re-write the following sentences according to the instructions given after each. <br> If you had not advised me, I would have fallen into the trap. [Begin: But_]",
        optionA: "But for your advise, I would have fallen into the trap.",
        optionB: "But for your advice, I would have fallen into the trap.",
        optionC: "But for your advising, I would have fallen into the trap.",
        optionD: "But for your advice, I would not have fallen into the trap.",
        correctOption: "optionB"
    },

    {
        question: "Re-write the following sentences according to the instructions given after each. <br> I am coming with you. [Provide a suitable question tag]",
        optionA: "I am coming with you, am I not?",
        optionB: "I am not coming with you, am I?",
        optionC: "I am coming with you, do I?",
        optionD: "I am coming with you, am I?",
        correctOption: "optionA"
    },


    {
        question: "Re-write the following sentences according to the instructions given after each. <br> This is the biggest elephant I have ever seen. [Use: big]",
        optionA: "I have never seen as big an elephant as this.",
        optionB: "I have never seen a big elephant than this.",
        optionC: "I have never seen as bigger an elephant as this.",
        optionD: "This is a big elephant I have ever seen.",
        correctOption: "optionA"
    }
]
