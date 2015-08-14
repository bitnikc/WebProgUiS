<?php

class WordStat {

    // characters to be ignored
    private static $ignore = array(".", ";", ":", "!", "?", ",", ")", "(", "[", "]", "\"");

    // stopwords
    private static $stopwords = array("a", "about", "above", "after", "again", "against", "all", "am", "an", "and",
        "any", "are", "aren't", "as", "at", "be", "because", "been", "before", "being", "below", "between", "both",
        "but", "by", "can't", "cannot", "could", "couldn't", "did", "didn't", "do", "does", "doesn't", "doing",
        "don't", "down", "during", "each", "few", "for", "from", "further", "had", "hadn't", "has", "hasn't", "have",
        "haven't", "having", "he", "he'd", "he'll", "he's", "her", "here", "here's", "hers", "herself", "him",
        "himself", "his", "how", "how's", "i", "i'd", "i'll", "i'm", "i've", "if", "in", "into", "is", "isn't", "it",
        "it's", "its", "itself", "let's", "me", "more", "most", "mustn't", "my", "myself", "no", "nor", "not", "of",
        "off", "on", "once", "only", "or", "other", "ought", "our", "ours", "ourselves", "out", "over", "own", "same",
        "shan't", "she", "she'd", "she'll", "she's", "should", "shouldn't", "so", "some", "such", "than", "that",
        "that's", "the", "their", "theirs", "them", "themselves", "then", "there", "there's", "these", "they",
        "they'd", "they'll", "they're", "they've", "this", "those", "through", "to", "too", "under", "until", "up",
        "very", "was", "wasn't", "we", "we'd", "we'll", "we're", "we've", "were", "weren't", "what", "what's", "when",
        "when's", "where", "where's", "which", "while", "who", "who's", "whom", "why", "why's", "with", "won't",
        "would", "wouldn't", "you", "you'd", "you'll", "you're", "you've", "your", "yours", "yourself", "yourselves");

    private $_config;

    function __construct($config) {
        $this->_config = $config;
        $this->load_file();
        $this->select_top_words();
    }

    /**
     * Loads a (text)file
     */
    function load_file() {
      $myfile = fopen("testfile.txt", "r") or die("Unable to open file!");
    }

    /**
     * Selects top words
     */
    function select_top_words() {
		// TODO
    }

    /**
     * Prints a table with statistics
     */
    function stat() {
		// TODO
    }

    /**
     * Prints a histogram of words
     */
    function histogram() {
		// TODO
    }

    /**
     * Prints a word cloud
     *
     * @param $css_classes array with the css classes to be used (from small to large)
     */
    function wordcloud($css_classes) {
		// TODO

        // 1. get the sum frequencies of the selected words ($totalfreq)

        // 2. determine display sizes for selected words
        // - process them from low to high freq (i.e., sort $this->_top_words) in a foreach loop
        //   use $sum to keep track of the total word frequencies so far ($sum)
        // - in the foreach loop
        //   - for each word, set the size to floor($sum / ($totalfreq / count($css_classes)))
        //     this produces a the array index for $css_classes (a number between 0 and count($css_classes) - 1)
        //   - increase $sum with the frequency of the word

        // 3. display tag cloud (words ordered alphabetically)
    }

}
