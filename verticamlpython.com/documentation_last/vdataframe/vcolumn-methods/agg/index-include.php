<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h1 id="vDataFrame[].agg-/-aggregate">vDataFrame[].agg / aggregate<a class="anchor-link" href="#vDataFrame[].agg-/-aggregate">&#182;</a></h1>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[&nbsp;]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">vDataFrame</span><span class="p">[]</span><span class="o">.</span><span class="n">aggregate</span><span class="p">(</span><span class="n">func</span><span class="p">:</span> <span class="nb">list</span><span class="p">)</span>
</pre></div>

</div>
</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<p>Aggregates the vcolumn using the input functions.</p>
<h3 id="Parameters">Parameters<a class="anchor-link" href="#Parameters">&#182;</a></h3>
</div>
</div>
</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<table id="parameters">
    <tr> <th>Name</th> <th>Type</th> <th>Optional</th> <th>Description</th> </tr>
    <tr> <td><div class="param_name">func</div></td> <td><div class="type">list</div></td> <td><div class = "no">&#10060;</div></td> <td>List of the different aggregation.<br>
                                                    <ul>
                                                        <li><b>approx_unique :</b> approximative cardinality</li>
                                                        <li><b>count :</b> number of non-missing elements</li>
                                                        <li><b>cvar :</b> conditional value at risk</li>
                                                        <li><b>dtype :</b> virtual column type</li>
                                                        <li><b>iqr :</b> interquartile range</li>
                                                        <li><b>kurtosis :</b> kurtosis</li>
                                                        <li><b>jb :</b> Jarque Bera index </li>
                                                        <li><b>mad :</b> median absolute deviation</li>
                                                        <li><b>mae :</b> mean absolute error (deviation)</li>
                                                        <li><b>max :</b> maximum</li>
                                                        <li><b>mean :</b> average</li>
                                                        <li><b>median :</b> median</li>
                                                        <li><b>min :</b> min</li>
                                                        <li><b>mode :</b> most occurent element</li>
                                                        <li><b>percent :</b> percent of non-missing elements</li>
                                                        <li><b>q% :</b> q quantile (ex: 50% for the median)</li>
                                                        <li><b>prod :</b> product</li>
                                                        <li><b>range :</b> difference between the max and the min</li>
                                                        <li><b>sem :</b> standard error of the mean</li>
                                                        <li><b>skewness :</b> skewness</li>
                                                        <li><b>sum :</b> sum</li>
                                                        <li><b>std :</b> standard deviation</li>
                                                        <li><b>topk :</b> kth most occurent element (ex: top1 for the mode)</li>
                                                        <li><b>topk_percent :</b> kth most occurent element density</li>
                                                        <li><b>std :</b> standard deviation</li>
                                                        <li><b>unique :</b> cardinality (count distinct)</li>
                                                        <li><b>var :</b> variance</li>
                                                        <li>Other aggregations could work if it is part of the DB version you are using.</li></ul></td> </tr>
</table>
</div>
</div>
</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="Returns">Returns<a class="anchor-link" href="#Returns">&#182;</a></h3><p><a href="../../../utilities/tablesample/index.php">tablesample</a> : An object containing the result. For more information, check out <a href="../../../utilities/tablesample/index.php">utilities.tablesample</a>.</p>
<h3 id="Example">Example<a class="anchor-link" href="#Example">&#182;</a></h3>
</div>
</div>
</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[13]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="kn">from</span> <span class="nn">vertica_ml_python.learn.datasets</span> <span class="k">import</span> <span class="n">load_titanic</span>
<span class="n">titanic</span> <span class="o">=</span> <span class="n">load_titanic</span><span class="p">()</span>
<span class="nb">print</span><span class="p">(</span><span class="n">titanic</span><span class="p">[</span><span class="s2">&quot;embarked&quot;</span><span class="p">])</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>embarked</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>0</b></td><td style="border: 1px solid white;">S</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>1</b></td><td style="border: 1px solid white;">S</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>2</b></td><td style="border: 1px solid white;">S</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>3</b></td><td style="border: 1px solid white;">S</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>4</b></td><td style="border: 1px solid white;">C</td></tr><tr><td style="border-top: 1px solid white;background-color:#214579;color:white"></td><td style="border: 1px solid white;">...</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt"></div>


<div class="output_subarea output_stream output_stdout output_text">
<pre>&lt;object&gt;  Name: embarked, Number of rows: 1234, dtype: varchar(20)
</pre>
</div>
</div>

</div>
</div>

</div>
<div class="cell border-box-sizing code_cell rendered">
<div class="input">
<div class="prompt input_prompt">In&nbsp;[14]:</div>
<div class="inner_cell">
    <div class="input_area">
<div class=" highlight hl-ipython3"><pre><span></span><span class="n">titanic</span><span class="p">[</span><span class="s2">&quot;embarked&quot;</span><span class="p">]</span><span class="o">.</span><span class="n">aggregate</span><span class="p">(</span><span class="n">func</span> <span class="o">=</span> <span class="p">[</span><span class="s2">&quot;unique&quot;</span><span class="p">,</span> <span class="s2">&quot;top1&quot;</span><span class="p">,</span> <span class="s2">&quot;top2&quot;</span><span class="p">])</span>
</pre></div>

</div>
</div>
</div>

<div class="output_wrapper">
<div class="output">


<div class="output_area">

<div class="prompt"></div>



<div class="output_html rendered_html output_subarea ">
<table style="border-collapse: collapse; border: 2px solid white"><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b></b></td><td style="font-size:1.02em;background-color:#214579;color:white"><b>"embarked"</b></td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>unique</b></td><td style="border: 1px solid white;">3</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>top1</b></td><td style="border: 1px solid white;">S</td></tr><tr style="{border: 1px solid white;}"><td style="border-bottom: 1px solid #DDD;font-size:1.02em;background-color:#214579;color:white"><b>top2</b></td><td style="border: 1px solid white;">C</td></tr></table>
</div>

</div>

<div class="output_area">

<div class="prompt output_prompt">Out[14]:</div>




<div class="output_text output_subarea output_execute_result">
<pre>&lt;object&gt;</pre>
</div>

</div>

</div>
</div>

</div>
<div class="cell border-box-sizing text_cell rendered"><div class="prompt input_prompt">
</div>
<div class="inner_cell">
<div class="text_cell_render border-box-sizing rendered_html">
<h3 id="See-Also">See Also<a class="anchor-link" href="#See-Also">&#182;</a></h3><table id="seealso">
    <tr><td><a href="../analytic/index.php">vDataFrame.analytic</a></td> <td>Adds a new vcolumn to the vDataFrame by using an advanced analytical function on a specific vcolumn.</td></tr>
</table>
</div>
</div>
</div>