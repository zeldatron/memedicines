<!-- components/grid/flexbox-grid.php -->

<div class="wrap container-fluid">
                <section class="page-section">
                     <h2>Responsive</h2>

                    <p>Responsive modifiers enable specifying different column sizes, offsets, alignment and distribution at xs,
                        sm, md &amp; lg viewport widths.</p>
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-1">
                            <div class="box-row"></div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-8 col-lg-10">
                            <div class="box-row"></div>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-2 col-lg-1">
                            <div class="box-row"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-1">
                            <div class="box-row"></div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-11">
                            <div class="box-row"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 col-sm-6 col-md-8 col-lg-10">
                            <div class="box-row"></div>
                        </div>
                        <div class="col-xs-2 col-sm-6 col-md-4 col-lg-2">
                            <div class="box-row"></div>
                        </div>
                    </div>
<pre><code>&lt;div class="row">
    &lt;div class="col-xs-12
                col-sm-8
                col-md-6
                col-lg-4">
        &lt;div class="box">Responsive&lt;/div>
    &lt;/div>
&lt;/div></code></pre>
                </section>

                <a name="fluid"></a>
                <section class="page-section">
                     <br>
                     <h2>Fluid</h2>

                    <p>Percent based widths allow fluid resizing of columns and rows.</p>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box-row"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1">
                            <div class="box-row"></div>
                        </div>
                        <div class="col-xs-11">
                            <div class="box-row"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-2">
                            <div class="box-row"></div>
                        </div>
                        <div class="col-xs-10">
                            <div class="box-row"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="box-row"></div>
                        </div>
                        <div class="col-xs-9">
                            <div class="box-row"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="box-row"></div>
                        </div>
                        <div class="col-xs-8">
                            <div class="box-row"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-5">
                            <div class="box-row"></div>
                        </div>
                        <div class="col-xs-7">
                            <div class="box-row"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="box-row"></div>
                        </div>
                        <div class="col-xs-6">
                            <div class="box-row"></div>
                        </div>
                    </div>
<pre><code>.col-xs-6 {
  flex-basis: 50%;
}</code></pre>

                </section>

                <a name="syntax"></a>
                <section class="page-section">
                     <h2>Simple Syntax</h2>

                    <p>All you need to remember is row, column, content.</p>
<pre><code>&lt;div class="row">
    &lt;div class="col-xs-12">
        &lt;div class="box">12&lt;/div>
    &lt;/div>
&lt;/div></code></pre>

                </section>

                <a name="offsets"></a>
                <section class="page-section">
                     <h2>Offsets</h2>

                    <p>Offset a column</p>
                    <div class="row">
                        <div class="col-xs-offset-11 col-xs-1">
                            <div class="box-row"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-10 col-xs-2">
                            <div class="box-row"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-9 col-xs-3">
                            <div class="box-row"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-8 col-xs-4">
                            <div class="box-row"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-7 col-xs-5">
                            <div class="box-row"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-6 col-xs-6">
                            <div class="box-row"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-5 col-xs-7">
                            <div class="box-row"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-4 col-xs-8">
                            <div class="box-row"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-3 col-xs-9">
                            <div class="box-row"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-2 col-xs-10">
                            <div class="box-row"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-offset-1 col-xs-11">
                            <div class="box-row"></div>
                        </div>
                    </div>
<pre><code>&lt;div class="row">
    &lt;div class="col-xs-offset-3 col-xs-9">
        &lt;div class="box">offset&lt;/div>
    &lt;/div>
&lt;/div></code></pre>

                </section>

                <a name="auto"></a>
                <section class="page-section">
                     <h2>Auto Width</h2>

                    <p>Add any number of auto sizing columns to a row. Let the grid figure it out.</p>
                    <div
                    class="row">
                        <div class="col-xs">
                            <div class="box-row"></div>
                        </div>
                        <div class="col-xs">
                            <div class="box-row"></div>
                        </div>
            </div>
            <div class="row">
                <div class="col-xs">
                    <div class="box-row"></div>
                </div>
                <div class="col-xs">
                    <div class="box-row"></div>
                </div>
                <div class="col-xs">
                    <div class="box-row"></div>
                </div>
            </div>
<pre><code>&lt;div class="row">
    &lt;div class="col-xs">
        &lt;div class="box">auto&lt;/div>
    &lt;/div>
&lt;/div></code></pre>

            </section>

            <a name="nested"></a>
            <section class="page-section">
                 <h2>Nested Grids</h2>

                <p>Nest grids inside grids inside grids.</p>
                <div class="row">
                    <div class="col-xs-7">
                        <div class="box box-container">
                            <div class="row">
                                <div class="col-xs-9">
                                    <div class="box-first box-container">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="box-nested"></div>
                                            </div>
                                            <div class="col-xs-8">
                                                <div class="box-nested"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3">
                                    <div class="box-first box-container">
                                        <div class="row">
                                            <div class="col-xs">
                                                <div class="box-nested"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-5">
                        <div class="box box-container">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="box-first box-container">
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="box-nested"></div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="box-nested"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<pre><code>&lt;div class="row">
    &lt;div class="col-xs">
        &lt;div class="box">
            &lt;div class="row">
                &lt;div class="col-xs">
                    &lt;div class="box">auto&lt;/div>
                &lt;/div>
            &lt;/div>
        &lt;/div>
    &lt;/div>
&lt;/div></code></pre>

            </section>

            <a name="alignment"></a>
            <section class="page-section">
                 <h2>Alignment</h2>

                <p>Add classes to align elements to the start or end of a row as well as the top,
                    bottom, or center of a column</p>
                    <h3><code>.start-</code></h3>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-container">
                            <div class="row start-xs">
                                <div class="col-xs-6">
                                    <div class="box-nested"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<pre><code>&lt;div class="row start-xs">
    &lt;div class="col-xs-6">
        &lt;div class="box">
            start
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>


                <h3><code>.center-</code></h3>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-container">
                            <div class="row center-xs">
                                <div class="col-xs-6">
                                    <div class="box-nested"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<pre><code>&lt;div class="row center-xs">
    &lt;div class="col-xs-6">
        &lt;div class="box">
            start
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>

                <h3><code>.end-</code></h3>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-container">
                            <div class="row end-xs">
                                <div class="col-xs-6">
                                    <div class="box-nested"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<pre><code>&lt;div class="row end-xs">
    &lt;div class="col-xs-6">
        &lt;div class="box">
            end
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>

                <p>Here is an example of using the modifiers in conjunction to acheive different alignment at different viewport sizes. </p>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-container">
                            <div class="row center-xs end-sm start-lg">
                                <div class="col-xs-6">
                                    <div class="box-nested"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>Example
<pre><code>&lt;div class="row center-xs end-sm start-lg">
    &lt;div class="col-xs-6">
        &lt;div class="box">
            All together now
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>

                <h3><code>.top-</code></h3>

                <div class="row top-xs">
                    <div class="col-xs-6">
                        <div class="box-large"></div>
                    </div>
                    <div class="col-xs-6">
                        <div class="box"></div>
                    </div>
                </div>
<pre><code>&lt;div class="row top-xs">
    &lt;div class="col-xs-6">
        &lt;div class="box">
            top
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>

                <h3><code>.middle-</code></h3>

                <div class="row middle-xs">
                    <div class="col-xs-6">
                        <div class="box-large"></div>
                    </div>
                    <div class="col-xs-6">
                        <div class="box"></div>
                    </div>
                </div>
<pre><code>&lt;div class="row middle-xs">
    &lt;div class="col-xs-6">
        &lt;div class="box">
            center
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>

                <h3><code>.bottom-</code></h3>

                <div class="row bottom-xs">
                    <div class="col-xs-6">
                        <div class="box-large"></div>
                    </div>
                    <div class="col-xs-6">
                        <div class="box"></div>
                    </div>
                </div>
<pre><code>&lt;div class="row bottom-xs">
    &lt;div class="col-xs-6">
        &lt;div class="box">
            bottom
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>

            </section>

            <a name="distribution"></a>
            <section class="page-section">
                 <h2>Distribution</h2>

                <p>Add classes to distribute the contents of a row or column.</p>
                <h3><code>.around-</code></h3>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-container">
                            <div class="row around-xs">
                                <div class="col-xs-2">
                                    <div class="box-nested"></div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-nested"></div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-nested"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<pre><code>&lt;div class="row around-xs">
    &lt;div class="col-xs-2">
        &lt;div class="box">
            around
        &lt;/div>
    &lt;/div>
    &lt;div class="col-xs-2">
        &lt;div class="box">
            around
        &lt;/div>
    &lt;/div>
    &lt;div class="col-xs-2">
        &lt;div class="box">
            around
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>

                <h3><code>.between-</code></h3>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-container">
                            <div class="row between-xs">
                                <div class="col-xs-2">
                                    <div class="box-nested"></div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-nested"></div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-nested"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<pre><code>&lt;div class="row between-xs">
    &lt;div class="col-xs-2">
        &lt;div class="box">
            between
        &lt;/div>
    &lt;/div>
    &lt;div class="col-xs-2">
        &lt;div class="box">
            between
        &lt;/div>
    &lt;/div>
    &lt;div class="col-xs-2">
        &lt;div class="box">
            between
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>

            </section>

            <a name="reordering"></a>
            <section class="page-section">
                 <h2>Reordering</h2>

                <p>Add classes to reorder columns.</p>
                <h3><code>.first-</code></h3>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-container">
                            <div class="row">
                                <div class="col-xs-2">
                                    <div class="box-first">1</div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-first">2</div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-first">3</div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-first">4</div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-first">5</div>
                                </div>
                                <div class="col-xs-2 first-xs">
                                    <div class="box-nested">6</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<pre><code>&lt;div class="row">
    &lt;div class="col-xs-2">
        &lt;div class="box">
            1
        &lt;/div>
    &lt;/div>
    &lt;div class="col-xs-2">
        &lt;div class="box">
            2
        &lt;/div>
    &lt;/div>
    &lt;div class="col-xs-2 first-xs">
        &lt;div class="box">
            3
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>

                <h3><code>.last-</code></h3>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-container">
                            <div class="row">
                                <div class="col-xs-2 last-xs">
                                    <div class="box-nested">1</div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-first">2</div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-first">3</div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-first">4</div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-first">5</div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-first">6</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<pre><code>&lt;div class="row">
    &lt;div class="col-xs-2 last-xs">
        &lt;div class="box">
            1
        &lt;/div>
    &lt;/div>
    &lt;div class="col-xs-2">
        &lt;div class="box">
            2
        &lt;/div>
    &lt;/div>
    &lt;div class="col-xs-2">
        &lt;div class="box">
            3
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>

            </section>

            <a name="reversing"></a>
            <section class="page-section">
                 <h2>Reversing</h2>

                 <h3><code>.reverse</code></h3>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-container">
                            <div class="row reverse">
                                <div class="col-xs-2">
                                    <div class="box-nested">1</div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-nested">2</div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-nested">3</div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-nested">4</div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-nested">5</div>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-nested">6</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<pre><code>&lt;div class="row reverse">
    &lt;div class="col-xs-2">
        &lt;div class="box">
            1
        &lt;/div>
    &lt;/div>
    &lt;div class="col-xs-2">
        &lt;div class="box">
            2
        &lt;/div>
    &lt;/div>
    &lt;div class="col-xs-2">
        &lt;div class="box">
            3
        &lt;/div>
    &lt;/div>
&lt;/div>
</code></pre>

            </section>

        </div>
