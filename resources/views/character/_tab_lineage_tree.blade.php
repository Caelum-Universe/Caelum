<div class="container text-center">
    <div class="row">
        <div class="col">
            <div class="border-bottom mb-1">
                <span class="font-weight-bold">Parent 1</span><br>{!! $line['sire'] !!}
            </div>
            <div class="row">
                <div class="col">
                    <div class="border-bottom mb-1">
                        <abbr class="font-weight-bold" title="Parent 1's Parent 1 - Grandparent 1">GP1</abbr><br>{!! $line['sire_sire'] !!}
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-1">
                                <abbr title="Parent 1's Parent 1's Parent 1 - Great Grandparent 1">GGP1</abbr><br>{!! $line['sire_sire_sire'] !!}
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-1">
                                <abbr title="Parent 1's Parent 1's Parent 2 - Great Grandparent 2">GGP2</abbr><br>{!! $line['sire_sire_dam'] !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="border-bottom mb-1">
                        <abbr class="font-weight-bold" title="Parent 1's Parent 2 - Grandparent 2">GP2</abbr><br>{!! $line['sire_dam'] !!}
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-1">
                                <abbr title="Parent 1's Parent 2's Parent 1 - Great Grandparent 3">GGP3</abbr><br>{!! $line['sire_dam_sire'] !!}
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-1">
                                <abbr title="Parent 1's Parent 2's Parent 2 - Great Grandparent 4">GGP4</abbr><br>{!! $line['sire_dam_dam'] !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="border-bottom mb-1">
                <span class="font-weight-bold">Parent 2</span><br>{!! $line['dam'] !!}
            </div>
            <div class="row">
                <div class="col">
                    <div class="border-bottom mb-1">
                        <abbr class="font-weight-bold" title="Parent 2's Parent 1 - Grandparent 3">GP3</abbr><br>{!! $line['dam_sire'] !!}
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-1">
                                <abbr title="Parent 2's Parent 1's Parent 1 - Great Grandparent 5">GGP5</abbr><br>{!! $line['dam_sire_sire'] !!}
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-1">
                                <abbr title="Parent 2's Parent 1's Parent 2 - Great Grandparent 6">GGP6</abbr><br>{!! $line['dam_sire_dam'] !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="border-bottom mb-1">
                        <abbr class="font-weight-bold" title="Parent 2's Parent 2 - Grandparent 4">GP4</abbr><br>{!! $line['dam_dam'] !!}
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-1">
                                <abbr title="Parent 2's Parent 2's Parent 1 - Great Grandparent 7">GGP7</abbr><br>{!! $line['dam_dam_sire'] !!}
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-1">
                                <abbr title="Parent 2's Parent 2's Parent 2 - Great Grandparent 8">GGP8</abbr><br>{!! $line['dam_dam_dam'] !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
