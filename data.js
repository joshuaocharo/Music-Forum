var defaultThreads = [
    {
        id: 1,
        title: "Diamond Platnumz",
        author: "Joshua",
        date: Date.now(),
        content: "Thread content",
        comments: [
            {
                author: "Jack",
                date: Date.now(),
                content: "The GOAT"
            },
            {
                author: "Arthur",
                date: Date.now(),
                content: "Trash Music"
            }
        ]
    },
    {
        id: 2,
        title: "Sauti Sol",
        author: "Joshua",
        date: Date.now(),
        content: "Thread content 2",
        comments: [
            {
                author: "Jack",
                date: Date.now(),
                content: "Best Group in Kenya"
            },
            {
                author: "Arthur",
                date: Date.now(),
                content: "I love Sauti Sol"
            }
        ]
    }
]

var threads = defaultThreads
if (localStorage && localStorage.getItem('threads')) {
    threads = JSON.parse(localStorage.getItem('threads'));
} else {
    threads = defaultThreads;
    localStorage.setItem('threads', JSON.stringify(defaultThreads));
}
//localStorage.clear()