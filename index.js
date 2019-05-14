

/*var myCss = {
    matrix: {
        root: "table table-striped"
    },
    navigationButton: "button btn-lg"
};

var json = {
    questions: [
        {
            type: "matrix",
            name: "Content",
            title: "Content and structure",
            columns: [
                {
                    value: 1,
                    text: "1"
                }, {
                    value: 2,
                    text: "2"
                }, {
                    value: 3,
                    text: "3"
                }, {
                    value: 4,
                    text: "4"
                }, {
                    value: 5,
                    text: "5"
                }, {
                    value: 6,
                    text: "6"
                }, {
                    value: 7,
                    text: "7"
                }, {
                    value: 8,
                    text: "8"
                }, {
                    value: 9,
                    text: "9"
                }, {
                    value: 10,
                    text: "10"
                }
            ],
            rows: [
                {
                    value: "introduction",
                    text: "Introduction"
                }, {
                    value: "overview",
                    text: "Gave an overview?"
                }, {
                    value: "structure",
                    text: "Structure of the presentation itself"
                }, {
                    value: "content",
                    text: "Content"
                }, {
                    value: "conclusion",
                    text: "Conclusion"
                }
            ]
        }, {
            type: "matrix",
            name: "Visualization",
            title: "Visualization",
            columns: [
                {
                    value: 1,
                    text: "1"
                }, {
                    value: 2,
                    text: "2"
                }, {
                    value: 3,
                    text: "3"
                }, {
                    value: 4,
                    text: "4"
                }, {
                    value: 5,
                    text: "5"
                }, {
                    value: 6,
                    text: "6"
                }, {
                    value: 7,
                    text: "7"
                }, {
                    value: 8,
                    text: "8"
                }, {
                    value: 9,
                    text: "9"
                }, {
                    value: 10,
                    text: "10"
                }
            ],
            rows: [
                {
                    value: "visualization",
                    text: "Visualization"
                }
            ]
        }
    ]
};

window.survey = new Survey.Model(json);

survey
    .onComplete
    .add(function (result) {
        document
            .querySelector('#ratingResult')
            .innerHTML = "result: " + JSON.stringify(result.data);
    });

$("#ratingElement").Survey({model: survey, css: myCss});
*/



Survey
    .StylesManager
    .applyTheme("default");

var myCss = {
    matrix: {
        root: "table table-striped",
    },
    navigationButton: "button btn-large"
};

var json = {
    questions: [
        {
            type: "matrix",
            name: "Content",
            title: "Content and structure",
            columns: [
                {
                    value: 1,
                    text: "1 (best)",
                }, {
                    value: 2,
                    text: "2"
                }, {
                    value: 3,
                    text: "3"
                }, {
                    value: 4,
                    text: "4"
                }, {
                    value: 5,
                    text: "5"
                }, {
                    value: 6,
                    text: "6"
                }, {
                    value: 7,
                    text: "7"
                }, {
                    value: 8,
                    text: "8"
                }, {
                    value: 9,
                    text: "9"
                }, {
                    value: 10,
                    text: "10 (worst)"
                }
            ],
            rows: [
                {
                    value: "introduction",
                    text: "Introduction"
                }, {
                    value: "overview",
                    text: "Gave an overview?"
                }, {
                    value: "structure",
                    text: "Structure of the presentation itself"
                }, {
                    value: "content",
                    text: "Content"
                }, {
                    value: "conclusion",
                    text: "Conclusion"
                }
            ]
        }, {
            type: "matrix",
            name: "Visualization",
            title: "Visualization",
            columns: [
                {
                    value: 1,
                    text: "1 (best)"
                }, {
                    value: 2,
                    text: "2"
                }, {
                    value: 3,
                    text: "3"
                }, {
                    value: 4,
                    text: "4"
                }, {
                    value: 5,
                    text: "5"
                }, {
                    value: 6,
                    text: "6"
                }, {
                    value: 7,
                    text: "7"
                }, {
                    value: 8,
                    text: "8"
                }, {
                    value: 9,
                    text: "9"
                }, {
                    value: 10,
                    text: "10 (worst)"
                }
            ],
            rows: [
                {
                    value: "visualization",
                    text: "Visualization of the presentation"
                }
            ]
        }, {
            type: "matrix",
            name: "teamwork",
            title: "Teamwork",
            columns: [
                {
                    value: 1,
                    text: "1 (best)"
                }, {
                    value: 2,
                    text: "2"
                }, {
                    value: 3,
                    text: "3"
                }, {
                    value: 4,
                    text: "4"
                }, {
                    value: 5,
                    text: "5"
                }, {
                    value: 6,
                    text: "6"
                }, {
                    value: 7,
                    text: "7"
                }, {
                    value: 8,
                    text: "8"
                }, {
                    value: 9,
                    text: "9"
                }, {
                    value: 10,
                    text: "10 (worst)"
                }
            ],
            rows: [
                {
                    value: "appearance",
                    text: "Acted as a team"
                }, {
                    value: "preparation",
                    text: "Preparation by the team"
                }, {
                    value: "participation",
                    text: "Audience felt necessity to participate"
                }
            ]
        }, {
            type: "comment",
            name: "additionalFeedback",
            title: "Additional feedback for the group: (optional)"
        }
    ]
};

window.survey = new Survey.Model(json);

survey
    .onComplete
    .add(function (result) {
        document
            .querySelector('#ratingResult')
            .innerHTML = "result: " + JSON.stringify(result.data);
    });
    

survey.onAfterRenderSurvey.add(function(sender) {
    // Let's add some things to the matrix questions that will only show on mobile devices
    //$('span[data-bind$="data.locText.text"]').css("display", "").addClass( "matrix-vert" );

});
$("#ratingElement").Survey({model: survey});


