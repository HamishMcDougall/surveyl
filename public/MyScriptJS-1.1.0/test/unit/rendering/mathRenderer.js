'use strict';

describe('MathRenderer: rendering/mathRenderer.js', function () {

    describe('Default construction', function () {

        var mathRenderer;
        before(function (done) {
            var canvas = document.createElement('canvas');
            mathRenderer = new MyScript.MathRenderer(canvas.getContext('2d'));
            done();
        });

        it('Check initial state', function () {
            expect(mathRenderer).to.be.an('object');
            expect(mathRenderer).to.be.an.instanceOf(MyScript.AbstractRenderer);
            expect(mathRenderer).to.be.an.instanceOf(MyScript.MathRenderer);
        });

    });

    describe('Workflow', function () {

        var mathRenderer, context;
        before(function (done) {
            var canvas = document.createElement('canvas');
            context = canvas.getContext('2d');
            mathRenderer = new MyScript.MathRenderer(context);
            done();
        });

        it('Clear context', function () {
            expect(function () {
                mathRenderer.clear();
            }).to.not.throw(Error);
        });

        it('Draw stroke', function () {
            expect(function () {
                mathRenderer.drawComponents([new MyScript.Stroke()]);
            }).to.not.throw(Error);
        });

        it('Draw stroke (@deprecated)', function () {
            expect(function () {
                mathRenderer.drawComponents([new MyScript.Stroke()], context, mathRenderer.getParameters());
            }).to.not.throw(Error);
        });

        it('Draw unknown component', function () {
            expect(function () {
                mathRenderer.drawComponents([{test: 'test'}]);
            }).to.throw(Error);
        });

        it('Draw unknown component (@deprecated)', function () {
            expect(function () {
                mathRenderer.drawComponents([{test: 'test'}], context, mathRenderer.getParameters());
            }).to.throw(Error);
        });

        it('Draw recognition result', function () {
            expect(function () {
                mathRenderer.drawRecognitionResult([], new MyScript.MathDocument());
            }).to.not.throw(Error);
        });

        it('Draw recognition result (@deprecated)', function () {
            expect(function () {
                mathRenderer.drawRecognitionResult([], new MyScript.MathDocument(), context, mathRenderer.getParameters());
            }).to.not.throw(Error);
        });

        it('Remove scratch out', function () {
            var stroke1 = new MyScript.Stroke({
                x: [354, 355],
                y: [165, 165]
            });
            var stroke2 = new MyScript.Stroke({
                x: [371, 372, 373, 376],
                y: [114, 113, 112, 111]
            });
            var scratchOutResults = [new MyScript.MathScratchOut({
                erasedInkRanges: [{
                    component: 0,
                    firstItem: 0,
                    lastItem: 2
                }], inkRanges: [{component: 1, firstItem: 0, lastItem: 4}]
            })];
            expect(mathRenderer.removeScratchOut([stroke1, stroke2], scratchOutResults).length).to.equal(0);
        });

    });

});