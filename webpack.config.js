module.exports = {
	"entry": {
        "modal":"./sample/coffee/modal.coffee"
    },
	"output": {
		"filename": "sample/js/[name].js"
	},
    module: {
        loaders: [
            { test: /\.coffee/, loader: "coffee" },
            { test: /\.html/, loader: "html" }
        ]
    },
    resolve: {
        extensions:["",".coffee",".js"]
    }
}