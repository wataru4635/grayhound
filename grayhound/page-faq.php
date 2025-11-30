<?php
/*
Template Name: よくある質問
*/
?>

<?php get_header(); ?>

<main>
  <section class="faq">
    <div class="faq__inner">
      <div class="faq__content">
        <div class="faq__title-wrap">
          <h2 class="faq__title"><img src="<?php echo IMAGEPATH; ?>/common/faq-title.webp" alt="FAQ" width="100" height="48" loading="lazy" class="faq__title-img"></h2>
          <p class="faq__subtitle">よくある質問</p>
        </div>
        <ul class="faq__list">

          <li class="faq__item">
            <div class="faq__item-inner">
              <button class="faq__item-header js-toggle-btn" type="button" aria-expanded="false">
                <div class="faq__item-question">
                  <span class="faq__item-q-label">Q1</span>
                  <p class="faq__item-q-text">英会話を習うのは初めてで､不安です｡</p>
                </div>
                <span class="faq__item-toggle"></span>
              </button>
              <div class="faq__item-answer">
                <div class="faq__item-answer-inner">
                  <span class="faq__item-a-label">A</span>
                  <p class="faq__item-a-text">
                    当校に入学される大半のお子様は全く英語が初めてです。<br class="u-desktop">レベル1のカリキュラムは、初めてのお子様でも楽しく学べるように作られており、心配ありません。
                  </p>
                </div>
              </div>
            </div>
          </li>

          <li class="faq__item">
            <div class="faq__item-inner">
              <button class="faq__item-header js-toggle-btn" type="button" aria-expanded="false">
                <div class="faq__item-question">
                  <span class="faq__item-q-label">Q2</span>
                  <p class="faq__item-q-text">なぜ小学5年以上は<br class="u-mobile">入学できないのですか？</p>
                </div>
                <span class="faq__item-toggle"></span>
              </button>
              <div class="faq__item-answer">
                <div class="faq__item-answer-inner">
                  <span class="faq__item-a-label">A</span>
                  <p class="faq__item-a-text">
                    当校のレッスンでは、英語の発音をとても大切にしています。<br class="u-desktop">そのため、日本語にはない「f」や「th」の発音が身につきやすい小学生4年までのお子様が入学対象となっています。
                  </p>
                </div>
              </div>
            </div>
          </li>

          <li class="faq__item">
            <div class="faq__item-inner">
              <button class="faq__item-header js-toggle-btn" type="button" aria-expanded="false">
                <div class="faq__item-question">
                  <span class="faq__item-q-label">Q3</span>
                  <p class="faq__item-q-text">レッスンが厳しいという噂です､<br class="u-mobile">本当でしょうか？</p>
                </div>
                <span class="faq__item-toggle"></span>
              </button>
              <div class="faq__item-answer">
                <div class="faq__item-answer-inner">
                  <span class="faq__item-a-label">A</span>
                  <p class="faq__item-a-text">
                    せっかく習いに来ているのに、小さな声でボソボソ練習しても、上手になりません。<br class="u-desktop">レッスンでは、大きな声で正しい発音で会話できるまで何度でも練習します。<br class="u-desktop">ですから、子供英会話スクールによく見られるような外国人講師とただ遊んでいる…という甘いレッスンではありません。<br class="u-desktop">厳しいけど楽しい当校のレッスンスタイルは1975年の創立以来変わっていません。<br class="u-desktop">子供たちはレッスンの中で「話せた！」という喜びを感じることができるので、教室はいつも笑い声でいっぱいです。
                  </p>
                </div>
              </div>
            </div>
          </li>

          <li class="faq__item faq__item--table">
            <div class="faq__item-inner">
              <button class="faq__item-header js-toggle-btn" type="button" aria-expanded="false">
                <div class="faq__item-question">
                  <span class="faq__item-q-label">Q4</span>
                  <p class="faq__item-q-text">クラス編成はどうなっていますか？</p>
                </div>
                <span class="faq__item-toggle"></span>
              </button>
              <div class="faq__item-answer">
                <div class="faq__item-answer-inner">
                  <span class="faq__item-a-label">A</span>
                  <p class="faq__item-a-text faq__item-a-text--table">
                    新年長から高校3年までの能力別クラス編成となっています。学年別ではありません。
                  </p>
                </div>
                <div class="faq__item-answer-content">
                  <div class="faq__item-answer-content-spacer"></div>
                  <div class="faq__item-answer-content-block">
                    <div class="faq__table-wrap js-scrollable">
                      <table class="faq__table">
                        <tbody>
                          <tr>
                            <th class="faq__table-head faq__table-head--blue" rowspan="6">
                              基礎コース<br><span class="faq__table-head-text">週1回<br>（60分レッスン）</span>
                            </th>
                            <td class="faq__table-level faq__table-level--center" rowspan="2">レベル1</td>
                            <td class="faq__table-text">1. 英語に楽しく触れる。</td>
                          </tr>
                          <tr>
                            <td class="faq__table-text">2. 大きな声で会話練習ができる。</td>
                          </tr>
                          <tr>
                            <td class="faq__table-level faq__table-level--center faq__table-level--blue" rowspan="2">レベル2</td>
                            <td class="faq__table-text faq__table-text--blue">1. 先生やクラスメートとQ&Aやペア練習ができる。</td>
                          </tr>
                          <tr>
                            <td class="faq__table-text faq__table-text--blue">2. 単語を読み、その単語を使って会話することができる。</td>
                          </tr>
                          <tr>
                            <td class="faq__table-level faq__table-level--center" rowspan="2">レベル3</td>
                            <td class="faq__table-text">1. 文章を読み、その文章を使って会話することができる。</td>
                          </tr>
                          <tr>
                            <td class="faq__table-text">2. 基礎コースの総復習、英語を書くことができる。</td>
                          </tr>
                          <tr class="faq__table-row">
                            <th class="faq__table-head faq__table-head--red" rowspan="3">
                              会話コース<br><span class="faq__table-head-text faq__table-head-text--conversation">週1回<br>（120分レッスン）</span>
                            </th>
                            <td class="faq__table-level faq__table-level--pink">Basicクラス</td>
                            <td class="faq__table-text faq__table-text--pink">基本的な文法を使い、会話を楽しむことができる。</td>
                          </tr>
                          <tr class="faq__table-row">
                            <td class="faq__table-level">Intermediateクラス</td>
                            <td class="faq__table-text">様々な場面で、英語で意思疎通することができる。</td>
                          </tr>
                          <tr class="faq__table-row">
                            <td class="faq__table-level faq__table-level--pink">Advancedクラス</td>
                            <td class="faq__table-text faq__table-text--pink">幅広いトピックで、自由に会話を楽しむことができる。</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <p class="faq__item-note">
                      “YES・NO”だけの受け身の英語ではなく、先生やクラスメートとQ&Aの練習をし、<br class="u-desktop">1つの単語から様々な英文が作れるように指導します。
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="faq__item">
            <div class="faq__item-inner">
              <button class="faq__item-header js-toggle-btn" type="button" aria-expanded="false">
                <div class="faq__item-question">
                  <span class="faq__item-q-label">Q5</span>
                  <p class="faq__item-q-text">書くこと/英検対策はしないのですか？</p>
                </div>
                <span class="faq__item-toggle"></span>
              </button>
              <div class="faq__item-answer">
                <div class="faq__item-answer-inner">
                  <span class="faq__item-a-label">A</span>
                  <p class="faq__item-a-text">
                    当校は、塾ではなく英会話スクールですので、「話す」ことを最優先にしています。<br class="u-desktop">したがって、レベル3になるまでは、書くことはしません。せっかく小さい頃から始めるのに、<br class="u-desktop">中学文法の先取りをするのではなく、英語をたくさん聞いて、たくさん話してほしいと考えています。<br class="u-desktop">英検に関しても、小学校低学年での5級〜3級の先取り合格を目標にするのではなく、<br class="u-desktop">中学校以降の準2級〜準1級の受験時に有利になるような力をつけていきます。
                  </p>
                </div>
              </div>
            </div>
          </li>

          <li class="faq__item">
            <div class="faq__item-inner">
              <button class="faq__item-header js-toggle-btn" type="button" aria-expanded="false">
                <div class="faq__item-question">
                  <span class="faq__item-q-label">Q6</span>
                  <p class="faq__item-q-text">入学までの流れを教えてください。</p>
                </div>
                <span class="faq__item-toggle"></span>
              </button>
              <div class="faq__item-answer">
                <div class="faq__item-answer-inner">
                  <span class="faq__item-a-label">A</span>
                  <p class="faq__item-a-text">
                    入学対象学年は新年長の春〜小学4年の秋までです。<br class="u-desktop">春と秋に開催される「無料レッスン説明会に参加」の上、<br class="u-desktop">その月の「無料レッスンを1カ月受講」して頂き、<br class="u-desktop">その翌月から「入学」となります。
                  </p>
                </div>
                <div class="faq__item-answer-flow-content">
                  <div class="faq__item-answer-content-spacer"></div>
                  <div class="faq__item-answer-flow">
                    <div class="faq__flow">
                      <p class="faq__flow-label">(例)</p>
                      <ul class="faq__flow-list">
                        <li class="faq__flow-step">
                          <div class="faq__flow-circle">
                            <p class="faq__flow-circle-text">
                              3月の<br>無料レッスン<br>説明会参加
                            </p>
                          </div>
                        </li>
                        <li class="faq__flow-step-separator"></li>
                        <li class="faq__flow-step">
                          <div class="faq__flow-circle">
                            <p class="faq__flow-circle-text">
                              3月中<br>無料レッスン<br>1ヶ月受講
                            </p>
                          </div>
                        </li>
                        <li class="faq__flow-step-separator"></li>
                        <li class="faq__flow-step">
                          <div class="faq__flow-circle">
                            <p class="faq__flow-circle-text">
                              4月より<br>正式入学
                            </p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <li class="faq__item">
            <div class="faq__item-inner">
              <button class="faq__item-header js-toggle-btn" type="button" aria-expanded="false">
                <div class="faq__item-question">
                  <span class="faq__item-q-label">Q7</span>
                  <p class="faq__item-q-text">英会話を習っていた経験がありますが､<br class="u-desktop">一番下のクラスから始めなければいけませんか？</p>
                </div>
                <span class="faq__item-toggle"></span>
              </button>
              <div class="faq__item-answer">
                <div class="faq__item-answer-inner">
                  <span class="faq__item-a-label">A</span>
                  <p class="faq__item-a-text">
                    「経験がある」場合でも、英語の力は個々によって異なります。<br class="u-desktop">無料体験中に英語の力を見させていただきますので、まずは、レベル1のクラスから受講してください。<br class="u-desktop">力があると判断した場合は進級しますが、進級のスピードにこだわるよりも、<br class="u-desktop">それぞれのクラスでのカリキュラムを着実に習得する事を一番にお考えください。
                  </p>
                </div>
              </div>
            </div>
          </li>

          <li class="faq__item">
            <div class="faq__item-inner">
              <button class="faq__item-header js-toggle-btn" type="button" aria-expanded="false">
                <div class="faq__item-question">
                  <span class="faq__item-q-label">Q8</span>
                  <p class="faq__item-q-text">長く続けさせたいと考えています。<br class="u-mobile">会話コースについて教えてください。</p>
                </div>
                <span class="faq__item-toggle"></span>
              </button>
              <div class="faq__item-answer">
                <div class="faq__item-answer-inner">
                  <span class="faq__item-a-label">A</span>
                  <p class="faq__item-a-text">
                    会話コースでは、NHKラジオ講座を聞き、レッスン日に暗唱する課題が出ます。<br class="u-desktop">暗唱してこないと、教室には入れません。進学するのは一部の生徒のみです。<br class="u-desktop">ただし、かなり先の話ですので、現時点ではそこまで考えず、基礎コース卒業を目標に、楽しく通ってくれれば大丈夫です。
                  </p>
                </div>
              </div>
            </div>
          </li>

          <li class="faq__item">
            <div class="faq__item-inner">
              <button class="faq__item-header js-toggle-btn" type="button" aria-expanded="false">
                <div class="faq__item-question">
                  <span class="faq__item-q-label">Q9</span>
                  <p class="faq__item-q-text">すでに英語を流暢に<br class="u-mobile">話す事が出来るのですが？</p>
                </div>
                <span class="faq__item-toggle"></span>
              </button>
              <div class="faq__item-answer">
                <div class="faq__item-answer-inner">
                  <span class="faq__item-a-label">A</span>
                  <p class="faq__item-a-text">
                    当校では日本語を母国語とするお子様対象のグループレッスンを行っています。<br class="u-desktop">その為、英語のレベルがあまりにも高いお子様の場合、適当なクラスをご案内できない事があります。
                  </p>
                </div>
              </div>
            </div>
          </li>

          <li class="faq__item">
            <div class="faq__item-inner">
              <button class="faq__item-header js-toggle-btn" type="button" aria-expanded="false">
                <div class="faq__item-question">
                  <span class="faq__item-q-label">Q10</span>
                  <p class="faq__item-q-text">説明会に参加しないと<br class="u-mobile">入学できないのですか？</p>
                </div>
                <span class="faq__item-toggle"></span>
              </button>
              <div class="faq__item-answer">
                <div class="faq__item-answer-inner">
                  <span class="faq__item-a-label">A</span>
                  <p class="faq__item-a-text">
                    はい。当校のシステムや理念をご理解の上、入学して頂いています。<br class="u-desktop">春と秋に無料体験レッスン説明会を行っています。参加希望の方は各校へお電話ください。
                  </p>
                </div>
              </div>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </section>


</main>

<?php get_footer(); ?>