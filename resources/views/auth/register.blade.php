<x-authentication-layout>
    <div class="card-body w-2/4">
        <form action="{{ route('register') }}" method="POST" class="w-full bg-white">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div class="">
                    <label class="block mb-2 text-[20px] font-[700] text-[#010237]">Title
                    </label>
                    <select name="title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="">Select Title</option>
                        <option>Mr</option>
                        <option>Mrs</option>
                        <option>Ms</option>
                        <option>Miss</option>
                    </select>
                </div>
                <div class="mb-6 ">
                    <label class="block mb-2 text-[20px] font-[700] text-[#010237]">First Name
                        <span class="text-red-500 text-sm mr-2">*</span></label><input required="" name="firstname"
                        type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Type First Name">
                    <div class="text-red-500 text-sm"></div>
                </div>
                <div class="mb-6 md:mr-10">
                    <label class="block mb-2 text-[20px] font-[700] text-[#010237]">Last
                        Name<span class="text-red-500 text-sm mr-2">*</span></label><input required=""
                        name="lastname" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Type Last Name">
                    <div class="text-red-500 text-sm"></div>
                </div>
                <div class="mb-6 ">
                    <label class="block mb-2 text-[20px] font-[700] text-[#010237]">Gender<span
                            class="text-red-500 text-sm mr-2">*</span></label>
                    <select name="gender"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="">Select Gender</option>
                        <option value="MALE">Male</option>
                        <option value="FEMALE">Female</option>
                        <option value="PREFER NOT&nbsp;TO&nbsp;SAY">Prefer Not to say</option>
                    </select>
                    <div class="text-red-500 text-sm"></div>
                </div>
                <div class="mb-6 md:mr-10">
                    <label class="block mb-2 text-[20px] font-[700] text-[#010237]">Age
                        Group</label>
                    <div class="w-full">
                        <select name="age_group"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="">Select Age Group</option>
                            <option value="UNDER_18">Under 18</option>
                            <option value="BETWEEN_18_24">18-24 years old</option>
                            <option value="BETWEEN_25_34">25-34 years old</option>
                            <option value="BETWEEN_35_44">35-44 years old</option>
                            <option value="BETWEEN_45_54">45-54 years old</option>
                            <option value="BETWEEN_55_64">55-64 years old</option>
                            <option value="ABOVE_65">65+ years old</option>
                        </select>
                    </div>
                    <div class="text-red-500 text-sm"></div>
                </div>
                <div class="mb-6 ">
                    <label
                        class="block mb-2 text-[20px] font-[700] text-[#010237] @error('title') is-invalid @enderror">Email<span
                            class="text-red-500 text-sm mr-2">*</span></label><input name="email" type="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Type Email" required="">
                    @error('email')
                        <div class="text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-6 ">
                    <label class="block mb-2 text-[20px] font-[700] text-[#010237]">Password
                        <span class="text-red-500 text-sm mr-2">*
                        </span>
                    </label>
                    <input name="password" type="password"
                        class="@error('title') is-invalid @enderror bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Password" required="">
                    @error('password')
                        <div class="text-red-500 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-6 md:mr-10">
                    <label class="block mb-2 text-[20px] font-[700] text-[#010237]">Phone
                        Number</label><input name="phone_number" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Type Phone Number" required="">
                    <div class="text-red-500 text-sm"></div>
                </div>
                <div class="mb-6">
                    <label class="block mb-2 text-[20px] font-[700] text-[#010237]">City<span
                            class="text-red-500 text-sm mr-2">*</span></label>
                    <input name="city" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Type Address" required="">
                    <div class="text-red-500 text-sm"></div>
                </div>
                <div class="mb-6 md:mr-10">
                    <label class="block mb-2 text-[20px] font-[700] text-[#010237]">Address</label><input name="address"
                        type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Type Address" required="">
                    <div class="text-red-500 text-sm"></div>
                </div>
                <div class="mb-6"><label class="block mb-2 text-[20px] font-[700] text-[#010237]">Zip
                        code</label><input name="zip_code" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Type Zip Code" required="">
                </div>
                <div class="mb-6 md:mr-10">
                    <label class="block mb-2 text-[20px] font-[700] text-[#010237]">Profession</label>
                    <select name="profession"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="">Select Profession</option>
                        <option value="iceman">iceman</option>
                        <option value="illusionist">illusionist</option>
                        <option value="illustrator">illustrator</option>
                        <option value="importer">importer</option>
                        <option value="industrialist">industrialist</option>
                        <option value="innkeeper">innkeeper</option>
                        <option value="instructor">instructor</option>
                        <option value="interpreter">interpreter</option>
                        <option value="interrogator">interrogator</option>
                        <option value="inventor">inventor</option>
                        <option value="investigator">investigator</option>
                        <option value="ironmonger">ironmonger</option>
                        <option value="ironworker">ironworker</option>
                        <option value="jack">jack</option>
                        <option value="jailer">jailer</option>
                        <option value="janitor">janitor</option>
                        <option value="jester">jester</option>
                        <option value="jeweler">jeweler</option>
                        <option value="jobber">jobber</option>
                        <option value="jockey">jockey</option>
                        <option value="joiner">joiner</option>
                        <option value="jongleur">jongleur</option>
                        <option value="journalist">journalist</option>
                        <option value="journeyman">journeyman</option>
                        <option value="judge">judge</option>
                        <option value="juggler">juggler</option>
                        <option value="jurist">jurist</option>
                        <option value="king">king</option>
                        <option value="knacker">knacker</option>
                        <option value="knight">knight</option>
                        <option value="baron">baron</option>
                        <option value="laborer">laborer</option>
                        <option value="baroness">baroness</option>
                        <option value="landlady">landlady</option>
                        <option value="landlord">landlord</option>
                        <option value="landsman">landsman</option>
                        <option value="lapidary">lapidary</option>
                        <option value="laundress">laundress</option>
                        <option value="lawyer">lawyer</option>
                        <option value="lecturer">lecturer</option>
                        <option value="librarian">librarian</option>
                        <option value="librettist">librettist</option>
                        <option value="lifeguard">lifeguard</option>
                        <option value="lighterman">lighterman</option>
                        <option value="limner">limner</option>
                        <option value="lineman">lineman</option>
                        <option value="linguist">linguist</option>
                        <option value="lister">lister</option>
                        <option value="lobbyist">lobbyist</option>
                        <option value="locksmith">locksmith</option>
                        <option value="longshoreman">longshoreman</option>
                        <option value="lumberjack">lumberjack</option>
                        <option value="lutenist">lutenist</option>
                        <option value="luthier">luthier</option>
                        <option value="lyricist">lyricist</option>
                        <option value="machinist">machinist</option>
                        <option value="magistrate">magistrate</option>
                        <option value="magnate">magnate</option>
                        <option value="maidservant">maidservant</option>
                        <option value="mailman">mailman</option>
                        <option value="management">management</option>
                        <option value="manager">manager</option>
                        <option value="manicurist">manicurist</option>
                        <option value="manufacturer">manufacturer</option>
                        <option value="mapper">mapper</option>
                        <option value="mariner">mariner</option>
                        <option value="marshal">marshal</option>
                        <option value="mason">mason</option>
                        <option value="masseur">masseur</option>
                        <option value="masseuse">masseuse</option>
                        <option value="master">master</option>
                        <option value="matador">matador</option>
                        <option value="mate">mate</option>
                        <option value="mathematician">mathematician</option>
                        <option value="mechanic">mechanic</option>
                        <option value="mediator">mediator</option>
                        <option value="medic">medic</option>
                        <option value="medicine">medicine</option>
                        <option value="mercenary">mercenary</option>
                        <option value="mercer">mercer</option>
                        <option value="merchant">merchant</option>
                        <option value="mesmerist">mesmerist</option>
                        <option value="messenger">messenger</option>
                        <option value="midshipman">midshipman</option>
                        <option value="midwife">midwife</option>
                        <option value="militia">militia</option>
                        <option value="milkmaid">milkmaid</option>
                        <option value="milkman">milkman</option>
                        <option value="miller">miller</option>
                        <option value="milliner">milliner</option>
                        <option value="millwright">millwright</option>
                        <option value="miner">miner</option>
                        <option value="miniaturist">miniaturist</option>
                        <option value="minister">minister</option>
                        <option value="minstrel">minstrel</option>
                        <option value="minter">minter</option>
                        <option value="missionary">missionary</option>
                        <option value="model">model</option>
                        <option value="modeller">modeller</option>
                        <option value="moneyer">moneyer</option>
                        <option value="moneylender">moneylender</option>
                        <option value="monk">monk</option>
                        <option value="mountaineer">mountaineer</option>
                        <option value="muleteer">muleteer</option>
                        <option value="mummer">mummer</option>
                        <option value="muralist">muralist</option>
                        <option value="musician">musician</option>
                        <option value="musketeer">musketeer</option>
                        <option value="nanny">nanny</option>
                        <option value="navigator">navigator</option>
                        <option value="negotiator">negotiator</option>
                        <option value="newscaster">newscaster</option>
                        <option value="noble">noble</option>
                        <option value="nobleman">nobleman</option>
                        <option value="notary">notary</option>
                        <option value="novelist">novelist</option>
                        <option value="numerologist">numerologist</option>
                        <option value="numismatist">numismatist</option>
                        <option value="nun">nun</option>
                        <option value="nurse">nurse</option>
                        <option value="nursemaid">nursemaid</option>
                        <option value="oboist">oboist</option>
                        <option value="obstetrician">obstetrician</option>
                        <option value="oilman">oilman</option>
                        <option value="oncologist">oncologist</option>
                        <option value="operator">operator</option>
                        <option value="ophthalmologist">ophthalmologist</option>
                        <option value="optician">optician</option>
                        <option value="optometrist">optometrist</option>
                        <option value="oracle">oracle</option>
                        <option value="orderly">orderly</option>
                        <option value="organizer">organizer</option>
                        <option value="ornithologist">ornithologist</option>
                        <option value="ostiary">ostiary</option>
                        <option value="ostler">ostler</option>
                        <option value="otorhinolaryngologist">otorhinolaryngologist</option>
                        <option value="outlaw">outlaw</option>
                        <option value="packer">packer</option>
                        <option value="packman">packman</option>
                        <option value="painter">painter</option>
                        <option value="paleontologist">paleontologist</option>
                        <option value="paperer">paperer</option>
                        <option value="paralegal">paralegal</option>
                        <option value="paramedic">paramedic</option>
                        <option value="paraprofessional">paraprofessional</option>
                        <option value="parapsychologist">parapsychologist</option>
                        <option value="pardoner">pardoner</option>
                        <option value="pastor">pastor</option>
                        <option value="pathologist">pathologist</option>
                        <option value="pawnbroker">pawnbroker</option>
                        <option value="peasant">peasant</option>
                        <option value="peddler">peddler</option>
                        <option value="pediatrician">pediatrician</option>
                        <option value="percussionist">percussionist</option>
                        <option value="perfumer">perfumer</option>
                        <option value="pettifogger">pettifogger</option>
                        <option value="pharmacist">pharmacist</option>
                        <option value="philanthropist">philanthropist</option>
                        <option value="philologist">philologist</option>
                        <option value="philosopher">philosopher</option>
                        <option value="photographer">photographer</option>
                        <option value="photojournalist">photojournalist</option>
                        <option value="physician">physician</option>
                        <option value="physicist">physicist</option>
                        <option value="physiotherapist">physiotherapist</option>
                        <option value="pianist">pianist</option>
                        <option value="picador">picador</option>
                        <option value="pickpocket">pickpocket</option>
                        <option value="pigman">pigman</option>
                        <option value="pilgrim">pilgrim</option>
                        <option value="pilot">pilot</option>
                        <option value="pioneer">pioneer</option>
                        <option value="piper">piper</option>
                        <option value="pirate">pirate</option>
                        <option value="pitman">pitman</option>
                        <option value="plaiter">plaiter</option>
                        <option value="plasterer">plasterer</option>
                        <option value="player">player</option>
                        <option value="playwright">playwright</option>
                        <option value="plowman">plowman</option>
                        <option value="plumber">plumber</option>
                        <option value="poacher">poacher</option>
                        <option value="podiatrist">podiatrist</option>
                        <option value="poet">poet</option>
                        <option value="police">police</option>
                        <option value="politician">politician</option>
                        <option value="pope">pope</option>
                        <option value="porter">porter</option>
                        <option value="postillion">postillion</option>
                        <option value="potboy">potboy</option>
                        <option value="potter">potter</option>
                        <option value="presenter">presenter</option>
                        <option value="president">president</option>
                        <option value="prestidigitator">prestidigitator</option>
                        <option value="priest">priest</option>
                        <option value="primate">primate</option>
                        <option value="prince">prince</option>
                        <option value="princess">princess</option>
                        <option value="principal">principal</option>
                        <option value="printer">printer</option>
                        <option value="proctologist">proctologist</option>
                        <option value="procurator">procurator</option>
                        <option value="professional">professional</option>
                        <option value="professor">professor</option>
                        <option value="programmer">programmer</option>
                        <option value="proofreader">proofreader</option>
                        <option value="prophet">prophet</option>
                        <option value="prospector">prospector</option>
                        <option value="psychiatrist">psychiatrist</option>
                        <option value="psychologist">psychologist</option>
                        <option value="publican">publican</option>
                        <option value="publisher">publisher</option>
                        <option value="purser">purser</option>
                        <option value="quack">quack</option>
                        <option value="quarrier">quarrier</option>
                        <option value="quarryman">quarryman</option>
                        <option value="quartermaster">quartermaster</option>
                        <option value="radiographer">radiographer</option>
                        <option value="radiologist">radiologist</option>
                        <option value="ragpicker">ragpicker</option>
                        <option value="rancher">rancher</option>
                        <option value="ranger">ranger</option>
                        <option value="reaper">reaper</option>
                        <option value="receptionist">receptionist</option>
                        <option value="rectifier">rectifier</option>
                        <option value="referee">referee</option>
                        <option value="registrar">registrar</option>
                        <option value="reporter">reporter</option>
                        <option value="researcher">researcher</option>
                        <option value="restaurateur">restaurateur</option>
                        <option value="retailer">retailer</option>
                        <option value="revenuer">revenuer</option>
                        <option value="rigger">rigger</option>
                        <option value="riveter">riveter</option>
                        <option value="roofer">roofer</option>
                        <option value="ropemaker">ropemaker</option>
                        <option value="roper">roper</option>
                        <option value="rover">rover</option>
                        <option value="runner">runner</option>
                        <option value="rustler">rustler</option>
                        <option value="sacristan">sacristan</option>
                        <option value="saddler">saddler</option>
                        <option value="sage">sage</option>
                        <option value="sailmaker">sailmaker</option>
                        <option value="sailor">sailor</option>
                        <option value="salesman">salesman</option>
                        <option value="salter">salter</option>
                        <option value="sapper">sapper</option>
                        <option value="sartor">sartor</option>
                        <option value="sawbones">sawbones</option>
                        <option value="sawyer">sawyer</option>
                        <option value="saxophonist">saxophonist</option>
                        <option value="scientist">scientist</option>
                        <option value="scout">scout</option>
                        <option value="screenwriter">screenwriter</option>
                        <option value="scribe">scribe</option>
                        <option value="scrivener">scrivener</option>
                        <option value="scrutineer">scrutineer</option>
                        <option value="scullion">scullion</option>
                        <option value="sculptor">sculptor</option>
                        <option value="sealer">sealer</option>
                        <option value="seamstress">seamstress</option>
                        <option value="searcher">searcher</option>
                        <option value="secretary">secretary</option>
                        <option value="seedsman">seedsman</option>
                        <option value="sempstress">sempstress</option>
                        <option value="senator">senator</option>
                        <option value="seneschal">seneschal</option>
                        <option value="serf">serf</option>
                        <option value="sergeant">sergeant</option>
                        <option value="servant">servant</option>
                        <option value="sexton">sexton</option>
                        <option value="sharecropper">sharecropper</option>
                        <option value="shearer">shearer</option>
                        <option value="sheepman">sheepman</option>
                        <option value="shepherd">shepherd</option>
                        <option value="sheriff">sheriff</option>
                        <option value="shill">shill</option>
                        <option value="shingler">shingler</option>
                        <option value="shipwright">shipwright</option>
                        <option value="shoemaker">shoemaker</option>
                        <option value="shopkeeper">shopkeeper</option>
                        <option value="shrimper">shrimper</option>
                        <option value="silversmith">silversmith</option>
                        <option value="singer">singer</option>
                        <option value="skinner">skinner</option>
                        <option value="sleeper">sleeper</option>
                        <option value="sleuth">sleuth</option>
                        <option value="smith">smith</option>
                        <option value="smuggler">smuggler</option>
                        <option value="socialite">socialite</option>
                        <option value="soldier">soldier</option>
                        <option value="solicitor">solicitor</option>
                        <option value="sommelier">sommelier</option>
                        <option value="spinner">spinner</option>
                        <option value="spinster">spinster</option>
                        <option value="splitter">splitter</option>
                        <option value="sportsman">sportsman</option>
                        <option value="spy">spy</option>
                        <option value="squire">squire</option>
                        <option value="stainer">stainer</option>
                        <option value="stationer">stationer</option>
                        <option value="statistician">statistician</option>
                        <option value="steersman">steersman</option>
                        <option value="stenographer">stenographer</option>
                        <option value="stevedore">stevedore</option>
                        <option value="steward">steward</option>
                        <option value="stitcher">stitcher</option>
                        <option value="stockbroker">stockbroker</option>
                        <option value="stoker">stoker</option>
                        <option value="stonecutter">stonecutter</option>
                        <option value="stonemason">stonemason</option>
                        <option value="storyteller">storyteller</option>
                        <option value="streaker">streaker</option>
                        <option value="strikebreaker">strikebreaker</option>
                        <option value="stringer">stringer</option>
                        <option value="stripper">stripper</option>
                        <option value="student">student</option>
                        <option value="stunt man">stunt man</option>
                        <option value="supervisor">supervisor</option>
                        <option value="surgeon">surgeon</option>
                        <option value="surveyor">surveyor</option>
                        <option value="sutler">sutler</option>
                        <option value="swain">swain</option>
                        <option value="sweep">sweep</option>
                        <option value="swimmer">swimmer</option>
                        <option value="swineherd">swineherd</option>
                        <option value="cutler">cutler</option>
                        <option value="tailor">tailor</option>
                        <option value="tallyman">tallyman</option>
                        <option value="tanner">tanner</option>
                        <option value="tapper">tapper</option>
                        <option value="tapster">tapster</option>
                        <option value="taxidermist">taxidermist</option>
                        <option value="taxonomist">taxonomist</option>
                        <option value="teacher">teacher</option>
                        <option value="teamster">teamster</option>
                        <option value="technician">technician</option>
                        <option value="technologist">technologist</option>
                        <option value="telegraphist">telegraphist</option>
                        <option value="teller">teller</option>
                        <option value="thatcher">thatcher</option>
                        <option value="theologian">theologian</option>
                        <option value="theologist">theologist</option>
                        <option value="therapist">therapist</option>
                        <option value="throwster">throwster</option>
                        <option value="tiler">tiler</option>
                        <option value="tiller">tiller</option>
                        <option value="timekeeper">timekeeper</option>
                        <option value="tinker">tinker</option>
                        <option value="tinner">tinner</option>
                        <option value="tinsmith">tinsmith</option>
                        <option value="tinter">tinter</option>
                        <option value="tipper">tipper</option>
                        <option value="tippler">tippler</option>
                        <option value="toller">toller</option>
                        <option value="toolmaker">toolmaker</option>
                        <option value="trader">trader</option>
                        <option value="tradesman">tradesman</option>
                        <option value="tramper">tramper</option>
                        <option value="trampler">trampler</option>
                        <option value="translator">translator</option>
                        <option value="trapper">trapper</option>
                        <option value="trapper">trapper</option>
                        <option value="treasurer">treasurer</option>
                        <option value="trencherman">trencherman</option>
                        <option value="troubadour">troubadour</option>
                        <option value="tumbler">tumbler</option>
                        <option value="turner">turner</option>
                        <option value="turnkey">turnkey</option>
                        <option value="tutor">tutor</option>
                        <option value="typist">typist</option>
                        <option value="undertaker">undertaker</option>
                        <option value="underwriter">underwriter</option>
                        <option value="unemployed">unemployed</option>
                        <option value="upholsterer">upholsterer</option>
                        <option value="urchin">urchin</option>
                        <option value="urologist">urologist</option>
                        <option value="usher">usher</option>
                        <option value="valet">valet</option>
                        <option value="vaquero">vaquero</option>
                        <option value="verger">verger</option>
                        <option value="veterinarian">veterinarian</option>
                        <option value="vibraphonist">vibraphonist</option>
                        <option value="vicar">vicar</option>
                        <option value="victualler">victualler</option>
                        <option value="Viking">Viking</option>
                        <option value="vintager">vintager</option>
                        <option value="vintner">vintner</option>
                        <option value="violinist">violinist</option>
                        <option value="violist">violist</option>
                        <option value="wagoner">wagoner</option>
                        <option value="wainwright">wainwright</option>
                        <option value="waiter">waiter</option>
                        <option value="waitress">waitress</option>
                        <option value="walker">walker</option>
                        <option value="warden">warden</option>
                        <option value="warder">warder</option>
                        <option value="warehouseman">warehouseman</option>
                        <option value="warrener">warrener</option>
                        <option value="watchmaker">watchmaker</option>
                        <option value="watchman">watchman</option>
                        <option value="waterman">waterman</option>
                        <option value="weatherman">weatherman</option>
                        <option value="weaver">weaver</option>
                        <option value="weeder">weeder</option>
                        <option value="weeper">weeper</option>
                        <option value="weigher">weigher</option>
                        <option value="welder">welder</option>
                        <option value="wetter">wetter</option>
                        <option value="whaler">whaler</option>
                        <option value="wheeler">wheeler</option>
                        <option value="wheelwright">wheelwright</option>
                        <option value="wigmaker">wigmaker</option>
                        <option value="winder">winder</option>
                        <option value="winemaker">winemaker</option>
                        <option value="witch">witch</option>
                        <option value="wizard">wizard</option>
                        <option value="woodcarver">woodcarver</option>
                        <option value="woodcutter">woodcutter</option>
                        <option value="wrangler">wrangler</option>
                        <option value="wright">wright</option>
                        <option value="writer">writer</option>
                        <option value="xylophonist">xylophonist</option>
                        <option value="yardman">yardman</option>
                        <option value="yeoman">yeoman</option>
                        <option value="zoo keeper">zoo keeper</option>
                        <option value="zoologist">zoologist</option>
                    </select>
                </div>
                {{-- <div class="mb-6 ">
                    <label class="block mb-2 text-[20px] font-[700] text-[#010237]">Chapter</label>
                    <select name="chapter"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="">Select Chapter</option>
                        <option value="MARYLAND / DISTRICT OF COLUMBIA / VIRGINIA">MARYLAND / DISTRICT OF
                            COLUMBIA / VIRGINIA
                        </option>
                        <option value="DALLAS, TEXAS">DALLAS, TEXAS</option>
                        <option value="HOUSTON, TEXAS">HOUSTON, TEXAS</option>
                        <option value="NEW YORK /NEW JERSEY/ CONNECTICUT">NEW YORK /NEW JERSEY/ CONNECTICUT
                        </option>
                        <option value="INDIANAPOLIS, INDIANA">INDIANAPOLIS, INDIANA</option>
                    </select>
                    <div class="text-red-500 text-sm"></div>
                </div> --}}
            </div>

            <div class="flex justify-end">
                <div class="flex flex-row space-x-4"><button
                        class="py-3 bg-secondary font-medium text-md text-[#010237] rounded px-5">Clear
                        All</button><button type="submit"
                        class="py-3  font-medium text-md rounded px-5 bg-[#3C5139] text-white ">Register</button>
                </div>
            </div>
            {{-- </div> --}}
            <div class="mt-4 border-t border-slate-200">
                <div class="text-sm">
                    {{ __('Don\'t you have an account?') }} <a
                        class="font-medium text-indigo-500 hover:text-indigo-600"
                        href="{{ route('login') }}">{{ __('Sign in') }}</a>
                </div>
                <!-- Warning -->
                <div class="mt-5">
                    <div class="bg-amber-100 text-amber-600 px-3 py-2 rounded">
                        <svg class="inline w-3 h-3 shrink-0 fill-current" viewBox="0 0 12 12">
                            <path
                                d="M10.28 1.28L3.989 7.575 1.695 5.28A1 1 0 00.28 6.695l3 3a1 1 0 001.414 0l7-7A1 1 0 0010.28 1.28z" />
                        </svg>
                        <span class="text-sm">
                            To support you during the pandemic super pro features are free until March 31st.
                        </span>
                    </div>
                </div>
            </div>
        </form>
        <x-jet-validation-errors class="mt-4" />
    </div>
</x-authentication-layout>
