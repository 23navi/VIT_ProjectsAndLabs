const path = require('path')
const express = require('express')
const fs = require('fs');
const app = express()

const port =process.env.PORT || 3000

let rawdata = fs.readFileSync('newsData.json');
let news= JSON.parse(rawdata);

console.log(news.length)

app.get('/news', (req, res) => {
    num=Math.floor((Math.random() * 99))
    res.send({"title":news[num].title,
    "author": news[num].author,
    "news": news[num].text
}

    )
})


app.get('/search', (req, res) => {
    if (!req.query.title) {
        return res.send({
            error: 'You must provide a search term'
        })
    }

    console.log(req.query.title)

    var results = [];
    var searchField = "title";
    var searchVal =req.query.title;
    for (var i=0 ; i < news.length ; i++)
    {
        if (news[i][searchField].includes(searchVal)) {
            results.push(news[i]);
        }
    }

    




    res.send(
        results
    )
})






app.get('*', (req, res) => {
    res.send("Goto /news to fetch random news")
})

app.listen(port, () => {
    console.log(`Server is up on port ${port}.`)
})